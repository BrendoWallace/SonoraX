<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="./CSS/Navbar.css">
    <link rel="stylesheet" href="./CSS/Responsividade.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./CSS/Hero.css">
    <link rel="stylesheet" href="./CSS/Box.css">
    <link rel="stylesheet" href="./CSS/teste.css">
    <link rel="stylesheet" href="./CSS/Faq.css">
    <link rel="stylesheet" href="./CSS/Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="./CSS/blog.css">

</head>

<body>


    <?php include 'include/nav.php'; ?>

    <section class="hero">

        <div id="carouselExampleDark" class="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <a href="./blog2.php?produto=cara_banner">
                        <img src="./IMG/cara_banner.png" class="img_carol img-fluid  d-block" alt="...">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="./blog2.php?produto=caraTocandoViolao">
                        <img src="./IMG/caraTocandoViolao_banner.png" class="img_carol img-fluid  d-block" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="./blog2.php?produto=meninas_banner">
                        <img src="./IMG/meninas_banner.png" class="img_carol img-fluid  d-block" alt="...">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-5" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-5" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <img class="onda" src="./IMG/ondas.png" alt="">

    <div class="blog">

        <div class="pesquisa mx-2">

            <button class="bt2">Melhores</button>

            <button class="botao">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            </button>

        </div>

        <div class="blogs">

            <h2 class="p-3">10 práticas úteis na hora de aprender a tocar um instrumento</h2>
            <p>autor: Carlos</p>
            <a href="./blog2.php?produto=caraTocandoViolao">
                <img src="./IMG/caraTocandoViolao_banner.png" alt="">
            </a>

        </div>

        <div class="blogs">

            <h2 class="p-3">Quando a música une talentos</h2>
            <p>autor: Pedro</p>
            <a href="./blog2.php?produto=menina_violino">
                <img src="./IMG/meninaTocandoViolino_blog.png" alt="">
            </a>

        </div>

        <div class="blogs">

            <h2 class="p-3">Aprendendo juntos: o poder da música em grupo</h2>
            <p>autor: Maria</p>
            <a href="./blog2.php?produto=criancas">
                <img src="./IMG/criancas.png" alt="">
            </a>

        </div>

    </div>


    <img class="onda" src="./IMG/ondas_virada.png" alt="onda invertida" aria-hidden="true">

    <hr>
    <div class="blog_extras">

        <a href="./blog2.php?produto=kitty">
            <img src="./IMG/kitty.png" alt="">
        </a>
        <div class="texto">
            <h2>O ritmo que move a música é hello kitty</h2>
            <p>autor: jão</p>
        </div>

    </div>
    <hr>
    <div class="blog_extras">

        <a href="./blog2.php?produto=grupo">
            <img src="./IMG/grupo.png" alt="">
        </a>
        <div class="texto">
            <h2>A música como parte da cultura e da história</h2>
            <p>autor: Ana</p>
        </div>

    </div>
    <hr>
    <div class="blog_extras">

        <a href="./blog2.php?produto=caraTocandoViolao">
            <img src="./IMG/caraTocandoViolao_banner.jpg" alt="">
        </a>
        <div class="texto">
            <h2>10 práticas úteis na hora de aprender a tocar um instrumento</h2>
            <p>autor: Carlos</p>
        </div>

    </div>
    <hr>

    <?php include 'include/footer.php'; ?>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <script src="./JS/blog.js"></script>

</body>

</html>