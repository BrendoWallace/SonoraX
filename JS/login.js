document.addEventListener("DOMContentLoaded", () => {

    iniciarVisualizacaoSenha();
    iniciarCadastroPorEtapas();
    iniciarValidacaoSenha();
    iniciarMascaraTelefone();
    iniciarLimpezaDosCampos();
    iniciarValidacaoFormularioCadastro();

});


/* =========================================================
   CONFIGURAÇÕES GERAIS
========================================================= */

const limiteTelaMobile = 768;

function estaEmTelaPequena() {

    return window.innerWidth <= limiteTelaMobile;

}


/* =========================================================
   MOSTRAR E OCULTAR SENHA
========================================================= */

function iniciarVisualizacaoSenha() {

    const botoesSenha = document.querySelectorAll(
        ".botao-visualizar-senha"
    );

    botoesSenha.forEach((botao) => {

        botao.addEventListener("click", () => {

            const idInputSenha = botao.dataset.inputSenha;
            const inputSenha = document.getElementById(idInputSenha);
            const icone = botao.querySelector("i");

            if (!inputSenha) {
                return;
            }

            const senhaEstaOculta = inputSenha.type === "password";

            inputSenha.type = senhaEstaOculta
                ? "text"
                : "password";

            if (icone) {

                icone.classList.toggle(
                    "bi-eye-slash",
                    !senhaEstaOculta
                );

                icone.classList.toggle(
                    "bi-eye",
                    senhaEstaOculta
                );

            }

            botao.setAttribute(
                "aria-label",
                senhaEstaOculta
                    ? "Ocultar senha"
                    : "Mostrar senha"
            );

        });

    });

}


/* =========================================================
   INICIALIZAÇÃO DO CADASTRO
========================================================= */

function iniciarCadastroPorEtapas() {

    const formulario = document.getElementById("formCadastro");

    if (!formulario) {
        return;
    }

    prepararFluxoResponsivo();

    const botoesAvancar = formulario.querySelectorAll(
        ".botao-avancar"
    );

    const botoesVoltar = formulario.querySelectorAll(
        ".botao-voltar"
    );

    botoesAvancar.forEach((botao) => {

        botao.addEventListener("click", () => {

            const etapaAtual = botao.closest(".etapa-cadastro");

            if (!etapaAtual) {
                return;
            }

            if (estaEmTelaPequena()) {

                avancarEtapaMobile(botao, etapaAtual);
                return;

            }

            avancarEtapaDesktop(etapaAtual);

        });

    });

    botoesVoltar.forEach((botao) => {

        botao.addEventListener("click", () => {

            if (estaEmTelaPequena()) {

                const etapaAnterior = botao.dataset.etapaAnterior;

                if (etapaAnterior) {
                    mostrarEtapaMobile(etapaAnterior);
                }

                return;

            }

            voltarEtapaDesktop(botao);

        });

    });

    let temporizadorRedimensionamento;

    window.addEventListener("resize", () => {

        clearTimeout(temporizadorRedimensionamento);

        temporizadorRedimensionamento = setTimeout(() => {
            prepararFluxoResponsivo();
        }, 150);

    });

}


/* =========================================================
   PREPARAR FLUXO RESPONSIVO
========================================================= */

function prepararFluxoResponsivo() {

    const formulario = document.getElementById("formCadastro");

    if (!formulario) {
        return;
    }

    const etapas = formulario.querySelectorAll(".etapa-cadastro");

    if (estaEmTelaPequena()) {

        prepararFluxoMobile(etapas, formulario);
        return;

    }

    prepararFluxoDesktop(etapas, formulario);

}


function prepararFluxoMobile(etapas, formulario) {

    etapas.forEach((etapa) => {
        etapa.classList.remove("ativa-desktop");
    });

    const etapaMobileAtiva = formulario.querySelector(
        ".etapa-cadastro.ativa"
    );

    if (etapaMobileAtiva) {
        return;
    }

    const etapaEmail = formulario.querySelector(
        '.etapa-cadastro[data-etapa="email"]'
    );

    etapaEmail?.classList.add("ativa");

}


function prepararFluxoDesktop(etapas, formulario) {

    etapas.forEach((etapa) => {
        etapa.classList.remove("ativa");
    });

    const etapasDesktopAtivas = formulario.querySelectorAll(
        ".etapa-cadastro.ativa-desktop"
    );

    if (etapasDesktopAtivas.length > 0) {
        return;
    }

    mostrarEtapaDesktop(1, false);

}


/* =========================================================
   FLUXO MOBILE
========================================================= */

function avancarEtapaMobile(botao, etapaAtual) {

    const proximaEtapa = botao.dataset.proximaEtapa;

    if (!proximaEtapa) {
        return;
    }

    if (!validarEtapa(etapaAtual)) {
        return;
    }

    mostrarEtapaMobile(proximaEtapa);

}


function mostrarEtapaMobile(numeroEtapa, deveRolar = true) {

    const formulario = document.getElementById("formCadastro");

    if (!formulario) {
        return;
    }

    const etapas = formulario.querySelectorAll(".etapa-cadastro");

    etapas.forEach((etapa) => {
        etapa.classList.remove("ativa");
    });

    const novaEtapa = formulario.querySelector(
        `.etapa-cadastro[data-etapa="${numeroEtapa}"]`
    );

    if (!novaEtapa) {
        return;
    }

    novaEtapa.classList.add("ativa");

    if (deveRolar) {
        rolarAteCard();
    }

    focarPrimeiroCampo(novaEtapa);

}


/* =========================================================
   FLUXO DESKTOP
========================================================= */

function mostrarEtapaDesktop(numeroEtapa, deveRolar = true) {

    const formulario = document.getElementById("formCadastro");

    if (!formulario) {
        return;
    }

    const etapas = formulario.querySelectorAll(".etapa-cadastro");

    etapas.forEach((etapa) => {
        etapa.classList.remove("ativa-desktop");
    });

    if (numeroEtapa === 1) {

        const etapaEmail = formulario.querySelector(
            '.etapa-cadastro[data-etapa="email"]'
        );

        const etapaSenha = formulario.querySelector(
            '.etapa-cadastro[data-etapa="1"]'
        );

        etapaEmail?.classList.add("ativa-desktop");
        etapaSenha?.classList.add("ativa-desktop");

        if (deveRolar) {
            rolarAteCard();
        }

        focarPrimeiroCampo(etapaEmail);

        return;

    }

    const novaEtapa = formulario.querySelector(
        `.etapa-cadastro[data-etapa="${numeroEtapa}"]`
    );

    if (!novaEtapa) {
        return;
    }

    novaEtapa.classList.add("ativa-desktop");

    if (deveRolar) {
        rolarAteCard();
    }

    focarPrimeiroCampo(novaEtapa);

}


function avancarEtapaDesktop(etapaAtual) {

    const numeroEtapa = etapaAtual.dataset.etapa;

    /*
        No desktop, o botão da etapa da senha valida
        o email e a senha ao mesmo tempo.
    */

    if (numeroEtapa === "1") {

        const etapaEmail = document.querySelector(
            '.etapa-cadastro[data-etapa="email"]'
        );

        const etapaSenha = document.querySelector(
            '.etapa-cadastro[data-etapa="1"]'
        );

        const emailValido = validarEtapaEmail(etapaEmail);
        const senhaValida = validarEtapaSenha(etapaSenha);

        if (!emailValido || !senhaValida) {
            return;
        }

        mostrarEtapaDesktop(2);
        return;

    }

    /*
        Dados pessoais.
    */

    if (numeroEtapa === "2") {

        if (!validarEtapaDadosPessoais(etapaAtual)) {
            return;
        }

        mostrarEtapaDesktop(3);

    }

}


function voltarEtapaDesktop(botao) {

    const etapaAtual = botao.closest(".etapa-cadastro");

    if (!etapaAtual) {
        return;
    }

    const numeroEtapa = etapaAtual.dataset.etapa;

    if (numeroEtapa === "2") {

        mostrarEtapaDesktop(1);
        return;

    }

    if (numeroEtapa === "3") {

        mostrarEtapaDesktop(2);

    }

}


/* =========================================================
   FOCO E ROLAGEM
========================================================= */

function focarPrimeiroCampo(etapa) {

    if (!etapa) {
        return;
    }

    const primeiroCampo = etapa.querySelector(
        "input:not([type='checkbox']):not([type='hidden']), select"
    );

    if (!primeiroCampo) {
        return;
    }

    setTimeout(() => {
        primeiroCampo.focus();
    }, 300);

}


function rolarAteCard() {

    const card = document.querySelector(".autenticacao-card");

    if (!card) {
        return;
    }

    card.scrollIntoView({
        behavior: "smooth",
        block: "center"
    });

}


/* =========================================================
   VALIDAÇÃO POR ETAPA
========================================================= */

function validarEtapa(etapa) {

    if (!etapa) {
        return false;
    }

    const identificadorEtapa = etapa.dataset.etapa;

    switch (identificadorEtapa) {

        case "email":
            return validarEtapaEmail(etapa);

        case "1":
            return validarEtapaSenha(etapa);

        case "2":
            return validarEtapaDadosPessoais(etapa);

        case "3":
            return validarEtapaTermos(etapa);

        default:
            return true;

    }

}


/* =========================================================
   VALIDAÇÃO DO EMAIL
========================================================= */

function validarEtapaEmail(etapa) {

    if (!etapa) {
        return false;
    }

    const email = etapa.querySelector("#email");
    const erroEmail = etapa.querySelector("#erroEmail");

    limparMensagemErro(erroEmail);

    if (!email) {
        return false;
    }

    const valorEmail = email.value.trim();

    if (valorEmail === "") {

        exibirMensagemErro(
            erroEmail,
            "Digite seu endereço de email."
        );

        marcarCampoInvalido(email);
        email.focus();

        return false;

    }

    if (!validarEmail(valorEmail)) {

        exibirMensagemErro(
            erroEmail,
            "Digite um endereço de email válido."
        );

        marcarCampoInvalido(email);
        email.focus();

        return false;

    }

    marcarCampoValido(email);

    return true;

}


function validarEmail(email) {

    const formatoEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    return formatoEmail.test(email);

}


/* =========================================================
   VALIDAÇÃO DA SENHA
========================================================= */

function iniciarValidacaoSenha() {

    const campoSenha = document.getElementById("senhaCadastro");

    if (!campoSenha) {
        return;
    }

    atualizarRequisitosVisuais(campoSenha.value);

    campoSenha.addEventListener("input", () => {

        atualizarRequisitosVisuais(campoSenha.value);
        removerMarcacaoCampo(campoSenha);

    });

}


function validarEtapaSenha(etapa) {

    if (!etapa) {
        return false;
    }

    const senha = etapa.querySelector("#senhaCadastro");

    if (!senha) {
        return false;
    }

    const requisitos = verificarRequisitosSenha(senha.value);

    const senhaValida = Object.values(requisitos).every(
        (requisito) => requisito === true
    );

    atualizarRequisitosVisuais(senha.value);

    if (!senhaValida) {

        marcarCampoInvalido(senha);
        senha.focus();

        return false;

    }

    marcarCampoValido(senha);

    return true;

}


function verificarRequisitosSenha(senha) {

    return {
        maiuscula: /[A-Z]/.test(senha),
        especial: /[^A-Za-z0-9\s]/.test(senha),
        numero: /\d/.test(senha),
        tamanho: senha.length >= 8
    };

}


function atualizarRequisitosVisuais(senha) {

    const requisitos = verificarRequisitosSenha(senha);

    Object.entries(requisitos).forEach(([nome, valido]) => {

        const itemRequisito = document.querySelector(
            `[data-requisito="${nome}"]`
        );

        if (!itemRequisito) {
            return;
        }

        itemRequisito.classList.toggle("valido", valido);

    });

}


/* =========================================================
   VALIDAÇÃO DOS DADOS PESSOAIS
========================================================= */

function validarEtapaDadosPessoais(etapa) {

    if (!etapa) {
        return false;
    }

    const nome = etapa.querySelector("#nome");
    const dia = etapa.querySelector("#diaNascimento");
    const mes = etapa.querySelector("#mesNascimento");
    const ano = etapa.querySelector("#anoNascimento");
    const genero = etapa.querySelector("#genero");
    const telefone = etapa.querySelector("#telefone");
    const erroData = etapa.querySelector("#erroDataNascimento");

    limparMensagemErro(erroData);

    let etapaValida = true;
    let primeiroCampoInvalido = null;

    /*
        Nome.
    */

    if (!nome || nome.value.trim().length < 3) {

        marcarCampoInvalido(nome);

        etapaValida = false;
        primeiroCampoInvalido = primeiroCampoInvalido || nome;

    } else {

        marcarCampoValido(nome);

    }

    /*
        Data de nascimento.
    */

    const resultadoData = validarDataNascimento(
        dia?.value,
        mes?.value,
        ano?.value
    );

    if (!resultadoData.valida) {

        marcarCampoInvalido(dia);
        marcarCampoInvalido(mes);
        marcarCampoInvalido(ano);

        exibirMensagemErro(
            erroData,
            resultadoData.mensagem
        );

        etapaValida = false;
        primeiroCampoInvalido = primeiroCampoInvalido || dia;

    } else {

        marcarCampoValido(dia);
        marcarCampoValido(mes);
        marcarCampoValido(ano);

    }

    /*
        Gênero.
    */

    if (!genero || genero.value === "") {

        marcarCampoInvalido(genero);

        etapaValida = false;
        primeiroCampoInvalido = primeiroCampoInvalido || genero;

    } else {

        marcarCampoValido(genero);

    }

    /*
        Telefone.
    */

    const telefoneNumerico = telefone
        ? telefone.value.replace(/\D/g, "")
        : "";

    if (
        telefoneNumerico.length !== 10 &&
        telefoneNumerico.length !== 11
    ) {

        marcarCampoInvalido(telefone);

        etapaValida = false;
        primeiroCampoInvalido =
            primeiroCampoInvalido || telefone;

    } else {

        marcarCampoValido(telefone);

    }

    if (primeiroCampoInvalido) {
        primeiroCampoInvalido.focus();
    }

    return etapaValida;

}


/* =========================================================
   VALIDAÇÃO DA DATA DE NASCIMENTO
========================================================= */

function validarDataNascimento(dia, mes, ano) {

    const diaNumero = Number(dia);
    const mesNumero = Number(mes);
    const anoNumero = Number(ano);

    if (!diaNumero || !mesNumero || !anoNumero) {

        return {
            valida: false,
            mensagem: "Preencha sua data de nascimento."
        };

    }

    const dataAtual = new Date();
    const anoAtual = dataAtual.getFullYear();

    if (anoNumero < 1900 || anoNumero > anoAtual) {

        return {
            valida: false,
            mensagem: "Digite um ano válido."
        };

    }

    if (mesNumero < 1 || mesNumero > 12) {

        return {
            valida: false,
            mensagem: "Digite um mês válido."
        };

    }

    const dataNascimento = new Date(
        anoNumero,
        mesNumero - 1,
        diaNumero
    );

    const dataExiste =
        dataNascimento.getFullYear() === anoNumero &&
        dataNascimento.getMonth() === mesNumero - 1 &&
        dataNascimento.getDate() === diaNumero;

    if (!dataExiste) {

        return {
            valida: false,
            mensagem: "Digite uma data de nascimento válida."
        };

    }

    if (dataNascimento > dataAtual) {

        return {
            valida: false,
            mensagem: "A data não pode estar no futuro."
        };

    }

    return {
        valida: true,
        mensagem: ""
    };

}


/* =========================================================
   MÁSCARA DE TELEFONE
========================================================= */

function iniciarMascaraTelefone() {

    const telefone = document.getElementById("telefone");

    if (!telefone) {
        return;
    }

    telefone.addEventListener("input", () => {

        telefone.value = formatarTelefone(telefone.value);
        removerMarcacaoCampo(telefone);

    });

}


function formatarTelefone(valor) {

    let numeros = valor.replace(/\D/g, "");

    numeros = numeros.slice(0, 11);

    if (numeros.length === 0) {
        return "";
    }

    if (numeros.length <= 2) {
        return `(${numeros}`;
    }

    if (numeros.length <= 6) {

        return (
            `(${numeros.slice(0, 2)}) ` +
            `${numeros.slice(2)}`
        );

    }

    if (numeros.length <= 10) {

        return (
            `(${numeros.slice(0, 2)}) ` +
            `${numeros.slice(2, 6)}-` +
            `${numeros.slice(6)}`
        );

    }

    return (
        `(${numeros.slice(0, 2)}) ` +
        `${numeros.slice(2, 7)}-` +
        `${numeros.slice(7)}`
    );

}


/* =========================================================
   VALIDAÇÃO DOS TERMOS
========================================================= */

function validarEtapaTermos(etapa) {

    if (!etapa) {
        return false;
    }

    const termosObrigatorios = etapa.querySelectorAll(
        'input[type="checkbox"][required]'
    );

    let termosValidos = true;
    let primeiroTermoInvalido = null;

    termosObrigatorios.forEach((termo) => {

        const itemTermo = termo.closest(".termo-item");

        if (!termo.checked) {

            termosValidos = false;

            primeiroTermoInvalido =
                primeiroTermoInvalido || termo;

            itemTermo?.classList.add("termo-invalido");

        } else {

            itemTermo?.classList.remove("termo-invalido");

        }

    });

    if (primeiroTermoInvalido) {
        primeiroTermoInvalido.focus();
    }

    return termosValidos;

}


/* =========================================================
   VALIDAÇÃO FINAL DO CADASTRO
========================================================= */

function iniciarValidacaoFormularioCadastro() {

    const formulario = document.getElementById("formCadastro");

    if (!formulario) {
        return;
    }

    formulario.addEventListener("submit", (evento) => {

        /*
            Impede momentaneamente o envio para validar
            todas as partes do cadastro.
        */

        evento.preventDefault();

        const etapaEmail = formulario.querySelector(
            '.etapa-cadastro[data-etapa="email"]'
        );

        const etapaSenha = formulario.querySelector(
            '.etapa-cadastro[data-etapa="1"]'
        );

        const etapaDados = formulario.querySelector(
            '.etapa-cadastro[data-etapa="2"]'
        );

        const etapaTermos = formulario.querySelector(
            '.etapa-cadastro[data-etapa="3"]'
        );

        const emailValido = validarEtapaEmail(etapaEmail);
        const senhaValida = validarEtapaSenha(etapaSenha);
        const dadosValidos = validarEtapaDadosPessoais(etapaDados);
        const termosValidos = validarEtapaTermos(etapaTermos);

        /*
            Identifica a primeira parte que contém algum erro.
        */

        let etapaComErro = null;

        if (!emailValido) {

            etapaComErro = "email";

        } else if (!senhaValida) {

            etapaComErro = "1";

        } else if (!dadosValidos) {

            etapaComErro = "2";

        } else if (!termosValidos) {

            etapaComErro = "3";

        }

        if (etapaComErro !== null) {

            direcionarParaEtapaComErro(etapaComErro);
            return;

        }

        /*
            Tudo válido: envia o formulário normalmente
            para o arquivo PHP definido no action.
        */

        formulario.submit();

    });

}


function direcionarParaEtapaComErro(etapaComErro) {

    if (estaEmTelaPequena()) {

        mostrarEtapaMobile(etapaComErro);
        return;

    }

    if (etapaComErro === "email" || etapaComErro === "1") {

        mostrarEtapaDesktop(1);
        return;

    }

    if (etapaComErro === "2") {

        mostrarEtapaDesktop(2);
        return;

    }

    if (etapaComErro === "3") {

        mostrarEtapaDesktop(3);

    }

}


/* =========================================================
   REMOVER ERROS ENQUANTO O USUÁRIO DIGITA
========================================================= */

function iniciarLimpezaDosCampos() {

    const formulario = document.getElementById("formCadastro");

    if (!formulario) {
        return;
    }

    const campos = formulario.querySelectorAll(
        "input, select"
    );

    campos.forEach((campo) => {

        const evento = campo.tagName === "SELECT"
            ? "change"
            : "input";

        campo.addEventListener(evento, () => {

            removerMarcacaoCampo(campo);

            if (campo.id === "email") {

                limparMensagemErro(
                    document.getElementById("erroEmail")
                );

            }

            if (
                campo.id === "diaNascimento" ||
                campo.id === "mesNascimento" ||
                campo.id === "anoNascimento"
            ) {

                limparMensagemErro(
                    document.getElementById(
                        "erroDataNascimento"
                    )
                );

                removerMarcacaoCampo(
                    document.getElementById("diaNascimento")
                );

                removerMarcacaoCampo(
                    document.getElementById("mesNascimento")
                );

                removerMarcacaoCampo(
                    document.getElementById("anoNascimento")
                );

            }

        });

    });

    const checkboxes = formulario.querySelectorAll(
        '.termo-item input[type="checkbox"]'
    );

    checkboxes.forEach((checkbox) => {

        checkbox.addEventListener("change", () => {

            const itemTermo = checkbox.closest(".termo-item");

            if (checkbox.checked) {
                itemTermo?.classList.remove("termo-invalido");
            }

        });

    });

}


/* =========================================================
   MARCAÇÃO VISUAL
========================================================= */

function marcarCampoInvalido(campo) {

    if (!campo) {
        return;
    }

    campo.classList.remove("campo-valido");
    campo.classList.add("campo-invalido");

}


function marcarCampoValido(campo) {

    if (!campo) {
        return;
    }

    campo.classList.remove("campo-invalido");
    campo.classList.add("campo-valido");

}


function removerMarcacaoCampo(campo) {

    if (!campo) {
        return;
    }

    campo.classList.remove(
        "campo-invalido",
        "campo-valido"
    );

}


function exibirMensagemErro(elemento, mensagem) {

    if (!elemento) {
        return;
    }

    elemento.textContent = mensagem;

}


function limparMensagemErro(elemento) {

    if (!elemento) {
        return;
    }

    elemento.textContent = "";

}