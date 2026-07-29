<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Perfil</title>

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

    <div class="box_perfil">
        <div class="perfil">
            <h2>Maior relevância</h2>
            <a href="./blog2.php?produto=banda_antiga">
                <img class="foto" src="./IMG/banda_antiga.png" alt="">
            </a>
        </div>
        <div class="segui mt-2">
            <div class="seguidores">
                <h2>Seguidores:</h2>
                <img src="./IMG//foto_perfil2.jpg" alt="">
                <img src="./IMG//foto_perfil2.jpg" alt="">
                <img src="./IMG//foto_perfil2.jpg" alt="">
            </div>
            <div class="seguindo mt-3 gap-3">
                <h2>Seguindo:</h2>
                <img src="./IMG//foto_perfil2.jpg" alt="">
                <img src="./IMG//foto_perfil2.jpg" alt="">
                <img src="./IMG//foto_perfil2.jpg" alt="">
            </div>
            <a class="verMais" href="#">Ver mais...</a>

        </div>
    </div>

    <img class="onda" src="./IMG/ondas.png" alt="">

    <div class="blog">

        <div class="pesquisa mx-2">

            <button class="bt2">Filtros</button>

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

        <!-- <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="">1</a></li>
                <li class="page-item active">
                    <a class="page-link" href="" aria-current="page">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="">3</a></li>
            </ul>
        </nav> -->

    </div>

    <img class="onda" src="./IMG/ondas_virada.png" alt="onda invertida" aria-hidden="true">

    <?php include 'include/footer.php'; ?>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <script src="./JS/blog.js"></script>

</body>

</html>