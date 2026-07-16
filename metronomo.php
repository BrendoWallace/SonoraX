<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metronomo</title>

    <link rel="stylesheet" href="./CSS/Navbar.css">
    <link rel="stylesheet" href="./CSS/Responsividade.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./CSS/Hero.css">
    <link rel="stylesheet" href="./CSS/Box.css">
    <link rel="stylesheet" href="./CSS/teste.css">
    <link rel="stylesheet" href="./CSS/Faq.css">
    <link rel="stylesheet" href="./CSS/Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="./CSS/metronomo.css">

</head>

<body>

    <?php include 'include/nav.php'; ?>

    <div class="video">
        <video class="oi" autoplay muted loop>

            <source src="./IMG/metrônomo.mp4" type="video/mp4">

        </video>
    </div>

    <script src='./JS/metronomo.js' type='text/javascript'></script>
    <script>
        const metronome = new KDMetronome() // sem passar toggleID
        metronome.ready(_ => metronome.show()) // força aparecer sem clique
    </script>

    <img class="onda" src="./IMG/ondas.png" alt="">

    <div class="aaaa">

        <div class="coisa">

            <video class="oi2" autoplay muted loop>

                <source src="./IMG/metrônomo.mp4" type="video/mp4">

            </video>

            <div class="texto">
                <h2>O que é um metrônomo</h2>
                <p class="l">O metrônomo é um aparelho que ajuda os músicos a manter o tempo
                    correto através de batimentos constantes medidos em BPM(batidas por minuto)
                    . Por exemplo, 60 BPM corresponde a um batimento por segundo, enquanto 120 BPM
                    equivale a dois batimentos por segundo.
                </p>

            </div>

        </div>

        <div class="coisa2">

            <img src="./IMG/metronomo_3.png" alt="">

            <div class="texto">
                <h2>Como usar o metrônomo</h2>
                <p class="l">Para usar o metrônomo, ajusta o andamento com o comtrole deslizante,
                    as setas do teclado ou o botão "Marcar tempo", que tambpem pode ser usado pela tecla
                    "t". Depois, escolhe o número de tempos por compasso, como 4/4, 3/4 ou 2/4. Se não
                    souberes qual usar, podes selecionar a oção 1 para manter apenas a marcação básica do ritmo.
                </p>
            </div>

        </div>

        <div class="coisa">

            <img src="./IMG/metronomo_2.webp" alt="">

            <div class="texto">
                <h2>Pode usar o metrônomo para</h2>

                <ul class="lista">
                    <li>Ajusta o metrônomo ao andamento indicado na partitura antes de tocar.</li>
                    <li>Pratica mantendo o tempo correto da música.</li>
                    <li>Usa a função silencionsa para treinar a manutenção do ritmo sem o som do metrõnomo.</li>
                    <li>Aumenta a dificuldade com configurações como 1/1, 2/2 e 4/4.</li>
                    <li>Começa devagar para melhorar a técnica.</li>
                    <li>Aumenta a velocidade gradualmente quando tocamos sem erros.</li>
                </ul>

            </div>

        </div>

        <div class="coisa2">

            <img src="./IMG/Keyboard_cat.jpg" alt="">

            <div class="texto">
                <h2>1° Passo</h2>
                <p class="l">O 1° passo é iniciar ele clicando no botão START/STOP igual a imagem ao lado,
                    o mesmo caso queira desliga-lo
                </p>
            </div>

        </div>

        <div class="coisa">

            <img src="./IMG/Keyboard_cat.jpg" alt="">

            <div class="texto">
                <h2>2° Passo</h2>
                <p class="l">Conforme explicado em "Como usar o metrônomo", ao lado do BPM temos dois sinas,
                    "+" e "-" onde você pode ajustar o nível do BPM desejado, lembre-se das regras explicadas
                    anteriormente, para melhor aproveito do metrônomo
                </p>
            </div>

        </div>

    </div>












    <img class="onda" src="./IMG/ondas_virada.png" alt="">

    <?php include 'include/footer.php'; ?>

    <script src="./JS/instru_anima.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="./JS/metronomo.js"></script>

</body>

</html>