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

    <div class="produto">

        <div class="ooi">

            <h2 id="nome-produto" class="mx-4 mt-5"></h2>

            <img id="imagem-produto" class="duvida1 mx-3">

            <p id="preco-produto" class="aa mx-4 mt-4"></p>

        </div>

    </div>

    <div class="pessoa_blog">

       <a href=""><img src="./IMG/meninaTocandoViolino_blog.png" alt=""></a>
        <h2>Autor: Maria</h2>

    </div>

    <img class="onda" src="./IMG/ondas.png" alt="">

    <div class="pessoa">

        <img src="./IMG/meninaTocandoViolino_blog.png" alt="">
        <div class="gg">Escreva seu comentário</div>


    </div>

    <div class="comentarios">

        <h2>Comentários</h2>

        <div class="comentarios-conteudo">

            <!-- Comentário principal -->
            <div class="comentario">

                <div class="box_comentario">

                    <img src="./IMG/meninaTocandoViolino_blog.png" alt="">

                    <div class="conteudo">
                        <h4>Roberto <span>há 1 hora</span></h4>
                        <p>Eu discordo.</p>

                        <div class="acoes">

                            <div class="acao">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span>8</span>
                            </div>

                            <div class="acao">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span>0</span>
                            </div>

                            <div class="acao">
                                <i class="fa-solid fa-comment"></i>
                                <span>Responder</span>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Respostas -->
                <div class="respostas">

                    <div class="comentario">

                        <div class="box_comentario">

                            <img src="./IMG/img_piano.png" alt="">

                            <div class="conteudo">
                                <h4>Felipe <span>há 45 min</span></h4>
                                <p>Concordo com o Roberto.</p>

                                <div class="acoes">

                                    <div class="acao">
                                        <i class="fa-solid fa-thumbs-up"></i>
                                        <span>8</span>
                                    </div>

                                    <div class="acao">
                                        <i class="fa-solid fa-thumbs-down"></i>
                                        <span>0</span>
                                    </div>

                                    <div class="acao">
                                        <i class="fa-solid fa-comment"></i>
                                        <span>Responder</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="respostas">

                            <div class="comentario">

                                <div class="box_comentario">

                                    <img src="./IMG/image 2.webp" alt="">

                                    <div class="conteudo">
                                        <h4>Anom <span>há 10 min</span></h4>
                                        <p>Discordo do Felipe.</p>

                                        <div class="acoes">

                                            <div class="acao">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                                <span>8</span>
                                            </div>

                                            <div class="acao">
                                                <i class="fa-solid fa-thumbs-down"></i>
                                                <span>0</span>
                                            </div>

                                            <div class="acao">
                                                <i class="fa-solid fa-comment"></i>
                                                <span>Responder</span>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="comentarios-conteudo">
            <!-- Outro comentário principal -->
            <div class="comentario">

                <div class="box_comentario">

                    <img src="./IMG/caraTocandoViolao_banner.jpg" alt="">

                    <div class="conteudo">

                        <h4>Roberto <span>há 5 minutos</span></h4>

                        <p>Eu concordo.</p>

                        <div class="acoes">

                            <div class="acao">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span>8</span>
                            </div>

                            <div class="acao">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <span>0</span>
                            </div>

                            <div class="acao">
                                <i class="fa-solid fa-comment"></i>
                                <span>Responder</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>





    <img class="onda" src="./IMG/ondas_virada.png" alt="onda invertida" aria-hidden="true">

    <?php include 'include/footer.php'; ?>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <script src="./JS/blog.js"></script>

</body>

</html>