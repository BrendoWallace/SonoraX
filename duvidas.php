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


    <div class="oi">

        <h2 class="titulo">&mdash;&mdash; Dúvidas &mdash;&mdash;</h2>

        <section class="faq-container">

            <details class="faq-item" open>

                <summary class="faq-pergunta">
                    Perguntas
                </summary>

                <div class="faq-resposta">
                    <p>Aqui ficará a resposta da primeira pergunta.</p>
                </div>

            </details>


            <details class="faq-item">

                <summary class="faq-pergunta">
                    O site é bom?
                </summary>

                <div class="faq-resposta">
                    <p>
                        Sim! É os guri
                    </p>
                </div>

            </details>


            <details class="faq-item">

                <summary class="faq-pergunta">
                    Perguntas
                </summary>

                <div class="faq-resposta">
                    <p>Aqui ficará a resposta da terceira pergunta.</p>
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