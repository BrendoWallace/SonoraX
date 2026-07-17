if (window.__kdMetronomeLoaded) {
    console.log('KDMetronome já carregado, ignorando inclusão duplicada do script.');
} else {
window.__kdMetronomeLoaded = true;

const _KD = {
    cdn: {
        tone: 'https://cdnjs.cloudflare.com/ajax/libs/tone/14.3.32/Tone.js',
        nexus: 'https://cdn.jsdelivr.net/npm/nexusui@2.0.10/dist/NexusUI.min.js',
        //São bibliotecas| Tone é o som/ritmo etc Nexus é o contadores bpm e vol que aparecem na interface(visual)
    },
    ready: false,
    _loaded: { tone: false, nexus: false },
    // Só vira true quando as bibliotecas carregarem

    // .kdmetronome--outer-container  -- A caixa mais externa que envolve o widget inteiro
    // .kdmetronome--inner-container -- A caixa roxa que contém o botão e os dois controles
    // .kdmetronome--start-button -- O botão azul claro de ligar/desligar
    // .kdmetronome--bpm-widget-outer / .kdmetronome--vol-widget-outer -- As caixinhas que envolvem cada controle numérico
    // .kdmetronome--widget-text-label -- Os textinhos "bpm" e "vol" embaixo dos controles
    css: `
        .kdmetronome--outer-container
        {margin-top:50px;
        opacity:1;
        display:none;
        left:80px;
        bottom:80px;
        flex-wrap:wrap;
        justify-content:center;
        align-items:center;
        align-content:center;}

        .kdmetronome--inner-container
        {padding:20px;
        display:flex;
        background-color:#6d59ad;
        flex-wrap:nowrap;
        justify-content:center;
        align-items:center;
        border-radius:15px;
        box-shadow:0 2px 7px 0 rgba(0,0,0,.5);
        user-select:none;}

        .kdmetronome--start-button
        {display:inline-block;
        border:none;
        padding:.375rem .75rem;
        height:54px;
        width:60px;
        color:#fff;
        cursor:pointer;
        outline:none!important;
        font-weight:400;
        font-size:1rem;
        line-height:1.5;
        margin-right:15px;
        border-radius:.25rem;
        background-color:#9fb2e9;
        text-align:center;
        vertical-align:middle;
        user-select:none;
        transition:color .15s ease-in-out,background-color .15s ease-in-out;}

        .kdmetronome--bpm-widget-outer
        {overflow:hidden;
        margin-right:15px;
        border-radius:3px;
        user-select:none;}

        .kdmetronome--vol-widget-outer
        {overflow:hidden;
        border-radius:3px;
        user-select:none;}

        .kdmetronome--widget-text-label
        {color:#fff;
        line-height:1.5;
        text-align:center;
        background-color:#9fb2e9;}

    `,
    // O injectCSS ele primeiro verifica se o CSS já está aplicado, se sim ele retorna, se
    // não ele cria a tag style e dá um id para ela e coloca o CSS acima.

    // Agora o LoadScript é para carregar as bibliotecas externas no script, ele cria a tag script
    // e s.src = src de onde vai ser baixado que é o CDN acima, depois quando baixar ele executa

    // Agora o init vai utilizar o injectCSS e o LoadScript, chamando o CSS e conferindo se os 
    // CDN estão baixados, se não  ele baixa de novo aí verifica com o checkready e roda no navegador com o KDinit

    injectCSS: () => {
        if (document.getElementById('kdmetronome--styles')) return;
        const style = document.createElement('style');
        style.id = 'kdmetronome--styles';
        style.textContent = _KD.css;
        document.head.appendChild(style);
    },

    loadScript: (src, onload) => {
        const s = document.createElement('script');
        s.src = src;
        s.onload = onload;
        document.body.appendChild(s);
    },

    init: () => {
        _KD.injectCSS();
        if (typeof Tone !== 'undefined') _KD._loaded.tone = true;
        else _KD.loadScript(_KD.cdn.tone, () => { console.log('[KDMetronome] Tone.js carregado'); _KD._loaded.tone = true; _KD.checkReady(); });
        if (typeof Nexus !== 'undefined') _KD._loaded.nexus = true;
        else _KD.loadScript(_KD.cdn.nexus, () => { console.log('[KDMetronome] NexusUI carregado'); _KD._loaded.nexus = true; _KD.checkReady(); });
        _KD.checkReady();
    },

    checkReady: () => { _KD.ready = _KD._loaded.tone && _KD._loaded.nexus; },
};
_KD.init();

/* Widget de metrônomo: start/stop, BPM, volume e som.
Constructor roda automaticamente e this para esse em específico e o id é para caso tiver +metronomo
 e somando depois quando cada metronomo/classe, para ele ficar na posição que eu queria ele ta null se não vai usar o body inteiro
 o bpm define a batida inicial e deixe como entre 6 e 300 para não ficar absurdo, porém eu testei e ele deixa ainda menos de 6, testei o 3
 mesma coisa para o volume e o ?? para não ter bugs de trocar o 0 pelo 50 só usa o ?? se for 0
 a frequência em 600hz e o prox é o som tá null pq pode ser que nã tenha carregado a biblioteca tone
 o outro é o agendamento tipo tem uma batida e quando vai tocar denovo o prox se está ligado ou não on or off
 outro esperar tudo para o visual e criar */
class KDMetronome {
    constructor(options = {}) {
        this.id = 'kd' + (KDMetronome._count = (KDMetronome._count || 0) + 1);
        this.parentID = options.parentID || null;
        this.bpm_ = KDMetronome.clip(options.bpm || 72, 6, 300);
        this.volume_ = KDMetronome.clip(options.volume ?? 50, 0, 100);
        this.frequency = options.frequency || 600;
        this.synth = null;
        this.loopId = undefined;
        this.running_ = false;
        this._waitReady(() => this._build());
    }

    // Isso é caso a pessoa ultrapassar o bpm max e min aí corta caso seja exagerado
    static clip(v, min, max) { return Math.min(Math.max(min, v), max); }

    // essa fica se repetindo conferindo se o kdready(acima) é true, cb é o build tries quantas vezes
    // tentou começando do 0 se for true executa o build e acabo sen não ele tenta 200 vezes x 100miliS = 20s
    _waitReady(cb, tries = 0) {
        if (_KD.ready) cb();
        else if (tries < 200) setTimeout(() => this._waitReady(cb, tries + 1), 100);
        else console.log('Unable to load KDMetronome dependencies.');
    }

    // A parte visual, só roda se o waitready estiver true com as bibliotecas baixadas, nesse caso o container_metronomo no html
    // entra em ação se não tiver ele vai para o final da página :< || document.createElement('div') cria-se algo invisível  e coloca as div do CSS
    // Aí vai estar a base realmente na página
    _build() {
        const parent = this.parentID ? document.getElementById(this.parentID) : document.body;

        const outer = document.createElement('div');
        outer.id = 'kdmetronome--outer-' + this.id;
        outer.className = 'kdmetronome--outer-container';
        outer.innerHTML = `
            <div class="kdmetronome--inner-container">
                <button id="kdmetronome--start-${this.id}" class="kdmetronome--start-button" type="button">off</button>
                <div class="kdmetronome--bpm-widget-outer">
                    <div id="kdmetronome--bpm-${this.id}"></div>
                    <div class="kdmetronome--widget-text-label">bpm</div>
                </div>
                <div class="kdmetronome--vol-widget-outer">
                    <div id="kdmetronome--vol-${this.id}"></div>
                    <div class="kdmetronome--widget-text-label">vol</div>
                </div>
            </div>`;
        parent.appendChild(outer);
        // this.startButton = document.getElementById(...): busca de volta, na página o botão que acabamos 
        // de criar via innerHTML e guarda essa referência para usar mais adiante. Aí depois tem o tone que é
        // o sintetizador do metronomo som é o oscillator especifica que tipo de onda sonora utiliza que é a mais suave
        // o envelope é como o som evolui em quatro fases: subida - caida - sustentar antes do apagar quando termina respectivamente
        // e conecta isso no volume seu e o applyVolume ajusta o volume real do sintetizador de acordo com this.volume_
        // tipo o controle do volume e tem o min e max, step qunado clica nas setinhas, parece que isso pe da biblioteca e não precisa no nosso código atual, posso remover para testar mais não tenho certeza
        // e depois tem o clique de on-off se clcar liga se nçao desliga 
        this.outer = outer;
        this.startButton = document.getElementById('kdmetronome--start-' + this.id);

        this.synth = new Tone.Synth({
            oscillator: { type: 'sine' },
            envelope: { attack: 0, decay: 0.05, sustain: 0, release: 0.1 },
        }).toDestination();
        this._applyVolume();

        this.bpmWidget = new Nexus.Number('#kdmetronome--bpm-' + this.id, { size: [60, 30], value: this.bpm_, min: 6, max: 300, step: 1 });
        this.bpmWidget.on('change', v => this.bpm(v));

        this.volWidget = new Nexus.Number('#kdmetronome--vol-' + this.id, { size: [60, 30], value: this.volume_, min: 0, max: 100, step: 1 });
        this.volWidget.on('change', v => this.volume(v));

        this.startButton.addEventListener('click', () => this.running_ ? this.stop() : this.start());
    }

    // o 1.6 é um fator de amplificação extra, pra deixar o som um pouco mais alto do que o padrão em volume máximo
    // o ouvido humano percebe volume de forma logarítmica, então engenheiros de áudio usam decibéis (dB). Essa função do Tone.js converte um "ganho" linear (0 a 1) para o valor correspondente em dB, que é a unidade que o Tone.js realmente usa internamente.
    // this.synth.volume.value = ...: aplica esse valor calculado ao volume real do sintetizador.
    _applyVolume() {
        if (this.synth) this.synth.volume.value = Tone.gainToDb((this.volume_ * 1.6) / 100);
    }

    // o botão on se tiver começado ele para para ter o verde mesmo que o som demore um tempo para conmeçar
    // caso tenha erro so som não sair ele vai pro catch e coloca no console.log || await Tone.start();: 
    // os navegadores modernos, por política de segurança/UX, bloqueiam qualquer site de tocar áudio automaticamente 
    // sem que o usuário tenha interagido antes e Tone.start() é a função do Tone.js que "libera" oficialmente o áudio
    // if (!this.running_) return;: uma checagem de segurança para quando clicar em off ele off mesmo mesmo com bpm
    // this.loopId = Tone.Transport.scheduleRepeat(time => {...}, '4n');: essa é a linha que efetivamente agenda o som repetitivo.
    async start() {
        if (this.running_) this.stop();
        this.running_ = true;
        if (this.startButton) {
            this.startButton.style.backgroundColor = '#1dd1a1';
            this.startButton.innerHTML = 'on';
        }
        try {
            await Tone.start();
            if (!this.running_) return;
            Tone.Transport.bpm.value = this.bpm_;
            this.loopId = Tone.Transport.scheduleRepeat(time => {
                this.synth.triggerAttackRelease(this.frequency, '8n', time);
            }, '4n');
            Tone.Transport.start();
        } catch (err) {
            console.error('[KDMetronome] Erro ao iniciar:', err);
        }
    }

    // ele para o agendamento do metronomo e deliga ele voltando para a cor azul off do botão, ele também close se quando ao clicar o off mas não clicou no on antes
    // Tone.Transport.clear(this.loopId): cancela especificamente aquele agendamento que criamos com scheduleRepeat, usando o ID guardado — a partir daqui, aquela função de "tique" não é mais chamada.
    // this.loopId = undefined;: limpa a referência, deixando claro que não há mais agendamento ativo.
    // Tone.Transport.stop();: para o "relógio" do Transport por completo.
    // this.running_ = false;: atualiza o estado interno
    stop() {
        if (this.loopId !== undefined) { Tone.Transport.clear(this.loopId); this.loopId = undefined; }
        Tone.Transport.stop();
        this.running_ = false;
        if (this.startButton) {
            this.startButton.style.backgroundColor = '#9fb2e9';
            this.startButton.innerHTML = 'off';
        }
    }

    running() { return this.running_; }

    bpm(value) {
        if (typeof value === 'number') {
            this.bpm_ = KDMetronome.clip(value, 6, 300);
            if (this.bpmWidget) this.bpmWidget.value = this.bpm_;
            if (this.running_) Tone.Transport.bpm.value = this.bpm_;
        }
        return this.bpm_;
    }

    volume(value) {
        if (typeof value === 'number') {
            this.volume_ = KDMetronome.clip(value, 0, 100);
            if (this.volWidget) this.volWidget.value = this.volume_;
            this._applyVolume();
        }
        return this.volume_;
    }

    show() { if (this.outer) this.outer.style.display = 'flex'; }
    hide() { if (this.outer) this.outer.style.display = 'none'; }

    ready(callback, tries = 0) {
        if (this.startButton) callback();
        else if (tries < 200) setTimeout(() => this.ready(callback, tries + 1), 100);
        else console.log('Unable to create metronome.');
    }
}

window.KDMetronome = KDMetronome;
}