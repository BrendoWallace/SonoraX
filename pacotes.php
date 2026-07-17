<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacotes</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/Navbar.css">
    <link rel="stylesheet" href="./CSS/Footer.css">
    <link rel="stylesheet" href="./CSS/pacotes.css">
    <link rel="stylesheet" href="./CSS/Responsividade.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>

    <?php include "./Include/nav.php"; ?>

    <main>

        <section class="secao-pacotes">

            <div class="pacotes-carrossel" aria-label="Pacotes SonoraX">

                <div class="pacotes-lista">

                    <article class="pacote-card">
                        <h2>PACOTE 1</h2>
                        <p class="pacote-preco">R$XX,XX</p>

                        <ul class="pacote-beneficios">
                            <li>Benefício incluído no pacote.</li>
                            <li>Acesso limitado às aulas da plataforma.</li>
                            <li>Conteúdos exclusivos para alunos.</li>
                            <li>Suporte durante o aprendizado.</li>
                            <li>Acompanhamento das atividades.</li>
                        </ul>

                        <a href="#" class="botao-inscricao">Inscreva-se</a>
                    </article>

                    <article class="pacote-card">
                        <span class="selo-popular">Mais Popular</span>

                        <h2>PACOTE 2</h2>
                        <p class="pacote-preco">R$XX,XX</p>

                        <ul class="pacote-beneficios">
                            <li>Inclui os benefícios do primeiro pacote.</li>
                            <li>Acesso ilimitado às aulas gravadas de professores parceiros.</li>
                            <li>Direito a uma aula teste com professor não parceiro.</li>
                            <li>Preços reduzidos em serviços de profissionais não parceiros.</li>
                            <li>Acesso às ferramentas da plataforma em desenvolvimento.</li>
                            <li>Recebimento de merchandising personalizado.</li>
                        </ul>

                        <a href="#" class="botao-inscricao">Inscreva-se</a>
                    </article>

                    <article class="pacote-card">
                        <h2>PACOTE 3</h2>
                        <p class="pacote-preco">R$XX,XX</p>

                        <ul class="pacote-beneficios">
                            <li>Todos os benefícios dos pacotes anteriores.</li>
                            <li>Acompanhamento personalizado durante o aprendizado.</li>
                            <li>Conteúdos avançados e exclusivos.</li>
                            <li>Atendimento prioritário.</li>
                            <li>Benefícios exclusivos da plataforma SonoraX.</li>
                        </ul>

                        <a href="#" class="botao-inscricao">Inscreva-se</a>
                    </article>

                </div>

            </div>



        </section>

        <div class="baixo">
            <img src="./img/ondas.png" alt="" class="onda" aria-hidden="true">
            <div class="caixa"></div>
        </div>

        <img src="./img/ondas_virada.png" alt="" class="onda invertida" aria-hidden="true">

        <section class="secao-historias">

            <header class="historias-cabecalho">

                <h2>
                    O que nossos alunos estão tocando
                </h2>

                <a href="#">
                    Ver mais histórias
                </a>

            </header>

            <div class="historias-carrossel">

                <div class="historias-lista">

                    <article class="historia-card">

                        <img
                            src="./img/pianokat.png"
                            alt="Foto do aluno Piano Cat"
                            class="historia-foto">

                        <h3>Piano Cat</h3>

                        <p class="historia-instrumento">
                            Piano
                        </p>

                        <p class="historia-descricao">
                            Toca um teclado sintetizador vintage inspirado no jazz
                            moderno. Seu foco atual é adaptar a complexidade de
                            "Giant Steps" para o mundo dos memes.
                        </p>

                        <a href="#" class="botao-ver-mais">
                            Ver mais
                        </a>

                    </article>

                    <article class="historia-card">

                        <img
                            src="./img/Miku I need this.jpg"
                            alt="Foto da aluna Miku"
                            class="historia-foto">

                        <h3>Miku I Need This</h3>

                        <p class="historia-instrumento">
                            Guitarra
                        </p>

                        <p class="historia-descricao">
                            Fã de tecnologia e música pop japonesa, ela utiliza um
                            software de síntese de voz e uma guitarra elétrica azul
                            neon. Está dominando o solo acelerado de Senbonzakura
                            para unir o digital ao orgânico.
                        </p>

                        <a href="#" class="botao-ver-mais">
                            Ver mais
                        </a>

                    </article>

                    <article class="historia-card">

                        <img
                            src="./img/confia.png"
                            alt="Foto do aluno Confia da Silva"
                            class="historia-foto">

                        <h3>Confia da Silva</h3>

                        <p class="historia-instrumento">
                            Confia
                        </p>

                        <p class="historia-descricao">
                            Mestre da percussão e personalidade marcante, encontrou
                            na música uma nova forma de expressão, aprendizado e
                            evolução.
                        </p>

                        <a href="#" class="botao-ver-mais">
                            Ver mais
                        </a>

                    </article>

                    <article class="historia-card">

                        <img
                            src="./img/roberto.jpg"
                            alt="Foto do aluno Roberto"
                            class="historia-foto">

                        <h3>Roberto</h3>

                        <p class="historia-instrumento">
                            Bateria
                        </p>

                        <p class="historia-descricao">
                            Apaixonado por ritmos intensos e viradas marcantes,
                            Roberto encontrou na bateria uma forma de transformar
                            energia em música. Atualmente, está aperfeiçoando sua
                            precisão e velocidade.
                        </p>

                        <a href="#" class="botao-ver-mais">
                            Ver mais
                        </a>

                    </article>

                </div>

            </div>

            <div class="historias-controles">

                <button
                    type="button"
                    class="botao-historias anterior"
                    aria-label="História anterior">
                    &#10094;
                </button>

                <div class="historias-indicadores">

                    <button
                        type="button"
                        class="indicador ativo"
                        aria-label="Mostrar primeira história"></button>

                    <button
                        type="button"
                        class="indicador"
                        aria-label="Mostrar segunda história"></button>

                    <button
                        type="button"
                        class="indicador"
                        aria-label="Mostrar terceira história"></button>

                    <button
                        type="button"
                        class="indicador"
                        aria-label="Mostrar quarta história"></button>

                </div>

                <button
                    type="button"
                    class="botao-historias proximo"
                    aria-label="Próxima história">
                    &#10095;
                </button>

            </div>

        </section>

    </main>

    <?php include "./Include/footer.php"; ?>

    <script src="./JS/pacotes.js"></script>
    <script src="./JS/Script.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>

</html>