<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dúvidas</title>

    <link rel="stylesheet" href="./CSS/Navbar.css">
    <link rel="stylesheet" href="./CSS/Responsividade.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./CSS/Hero.css">
    <link rel="stylesheet" href="./CSS/Box.css">
    <link rel="stylesheet" href="./CSS/teste.css">
    <link rel="stylesheet" href="./CSS/Faq.css">
    <link rel="stylesheet" href="./CSS/Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="./CSS/duvidas.css">

</head>

<body>

    <div class="onda">

        <img src="./IMG/ondas_virada.png" alt="onda invertida" aria-hidden="true">

    </div>

    <header class="navbar-container">
        <?php include 'include/nav.php'; ?>

    </header>


    <div class="FAQ">

        <h2 class="titulo">&mdash;&mdash; Dúvidas &mdash;&mdash;</h2>

        <section class="faq-container">

            <details class="faq-item" open>

                <summary class="faq-pergunta">
                    Quais instrumentos posso aprender?
                </summary>

                <div class="faq-resposta">
                    <p>O site oferece aulas de diversos instrumentos, como violão, guitarra, piano, 
                    teclado, bateria, violino, flauta, canto e muitos outros, dependendo dos professores 
                    cadastrados.</p>
                </div>

            </details>


            <details class="faq-item">

                <summary class="faq-pergunta">
                    Posso cancelar ou remarcar uma aula?
                </summary>

                <div class="faq-resposta">
                    <p>
                        Sim. O aluno pode cancelar ou solicitar a remarcação da aula dentro do prazo 
                        estabelecido pelo professor.
                    </p>
                </div>

            </details>


            <details class="faq-item">

                <summary class="faq-pergunta">
                    Preciso ter experiência para começar?
                </summary>

                <div class="faq-resposta">
                    <p>Não. Existem professores para todos os níveis, desde iniciantes até alunos avançados. 
                        Basta escolher um professor compatível com seu nível de conhecimento.</p>
                </div>

            </details>

            <details class="faq-item">

                <summary class="faq-pergunta">
                    Como os professores cadastram suas aulas?
                </summary>

                <div class="faq-resposta">
                    <p>Os professores possuem uma área exclusiva onde podem cadastrar aulas, definir horários
                         disponíveis, atualizar seu perfil e acompanhar os alunos inscritos.</p>
                </div>

            </details>

            <details class="faq-item">

                <summary class="faq-pergunta">
                    Preciso ter experiência para começar?
                </summary>

                <div class="faq-resposta">
                    <p>Não. Existem professores para todos os níveis, desde iniciantes até alunos avançados. 
                        Basta escolher um professor compatível com seu nível de conhecimento.</p>
                </div>

            </details>

             <details class="faq-item">

                <summary class="faq-pergunta">
                    Posso assistir às aulas pelo celular?
                </summary>

                <div class="faq-resposta">
                    <p>Sim. O site é compatível com computadores, tablets e smartphones.</p>
                </div>

            </details>

             <details class="faq-item">

                <summary class="faq-pergunta">
                    Posso ter aulas com mais de um professor?
                </summary>

                <div class="faq-resposta">
                    <p>Sim. Você pode agendar aulas com diferentes professores conforme seu interesse e o 
                        instrumento que deseja aprender.</p>
                </div>

            </details>

        </section>

    </div>

    <img class="onda2" src="./IMG/ondas.png" alt="">

    <?php include 'include/footer.php'; ?>

    <script src="./JS/instru_anima.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>

</html>