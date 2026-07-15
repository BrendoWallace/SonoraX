<!DOCTYPE html>
<html lang="pt-br">

<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SonoraX</title>

  <link rel="stylesheet" href="./CSS/Navbar.css">
  <link rel="stylesheet" href="./CSS/Responsividade.css">
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="./CSS/Hero.css">
  <link rel="stylesheet" href="./CSS/Box.css">
  <link rel="stylesheet" href="./CSS/teste.css">
  <link rel="stylesheet" href="./CSS/Faq.css">
  <link rel="stylesheet" href="./CSS/Footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>

  <?php include 'include/nav.php'; ?>


  <section class="hero">

    <div id="carouselExampleDark" class="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./IMG/pianokat.png" class="img_carol img-fluid  d-block" alt="...">
          <div class="carousel-caption d-block d-md-block bg-dark rounded-5">
            <h5>Domine seu Instrumento</h5>
            <p class="">Aprenda com os melhores especialista e leve sua técnica para o próximo nivel, no seu próprio ritmo.</p>

            <a href="./pacotes.html"> <button class="botao">Pacotes</button> </a>

          </div>

        </div>

        <div class="carousel-item">
          <img src="./IMG/ChatGPT Image 2 de jul. de 2026, 16_22_08.png" class="img_carol img-fluid  d-block" alt="...">
          <div class="carousel-caption d-block d-md-block bg-dark rounded-5">
            <h5>Domine seu Instrumento</h5>
            <p>Aprenda com os melhores especialista e leve sua técnica para o próximo nivel, no seu próprio ritmo.</p>
            <a href="./pacotes.html"> <button class="botao">Pacotes</button> </a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./IMG/piano car gamer.png" class="img_carol img-fluid  d-block" alt="...">
          <div class="carousel-caption d-block d-md-block bg-dark rounded-5">
            <h5>Domine seu Instrumento</h5>
            <p>Aprenda com os melhores especialista e leve sua técnica para o próximo nivel, no seu próprio ritmo.</p>
            <a href="./pacotes.html"> <button class="botao">Pacotes</button> </a>
          </div>
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

  <div class="box">

    <button class="botao_hero">

      <a class="texto_hero" href="">Instrumentos</a>

    </button>

    <button class="botao_hero">

      <a class="texto_hero" href="">Ferramentas</a>

    </button>

    <button class="botao_hero">

      <a class="texto_hero" href="">Blog</a>

    </button>


  </div>

  <div class="baixo">

    <img class="onda" src="./IMG/ondas.png" alt="">



    <div class="display_instru d-flex row justify-content-evenly">



      <div class="box_instru mb-4">

        <div class="borda_instru violao">

          <a href=""> <img class="img_instru ms-3" src="./IMG/img_violao.webp" alt=""></a>

        </div>
      </div>

      <div class="box_instru mb-4">

        <div class="borda_instru piano">

          <a href=""> <img class="img_instru ms-3" src="./IMG/img_piano.png" alt=""></a>

        </div>

      </div>
      <div class="box_instru mb-4">

        <div class="borda_instru trompete">

          <a href=""> <img class="img_instru ms-3" src="./IMG/img_tropmpete.png" alt=""></a>

        </div>

      </div>
      <div class="box_instru mb-4">

        <div class="borda_instru trompete">

          <a href=""> <img class="img_instru ms-3" src="./IMG/img_tropmpete.png" alt=""></a>

        </div>
      </div>
      <div class="box_instru mb-4">

        <div class="borda_instru trompete">

          <a href=""> <img class="img_instru ms-3" src="./IMG/img_tropmpete.png" alt=""></a>

        </div>
      </div>
      <div class="box_instru mb-4">

        <div class="borda_instru trompete">

          <a href=""> <img class="img_instru ms-3" src="./IMG/img_tropmpete.png" alt=""></a>

        </div>

      </div>

    </div>

  </div>

  <img class="onda" src="./IMG/ondas_virada.png" alt="">

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

  <?php include 'include/footer.php'; ?>


  <script src="./JS/instru_anima.js"></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>



</body>

</html>