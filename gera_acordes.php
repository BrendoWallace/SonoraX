<!DOCTYPE html>



<html lang="pt-br">



<head>



  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Gerador de acordes</title>

  <link rel="stylesheet" href="./CSS/Navbar.css">
  <link rel="stylesheet" href="./CSS/Responsividade.css">
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="./CSS/Hero.css">
  <link rel="stylesheet" href="./CSS/teste.css">
  <link rel="stylesheet" href="./CSS/Footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <script src="./gerador_acordes/classes/Note.js"></script>
    <script src="./gerador_acordes/classes/Intervals.js"></script>
    <script src="./gerador_acordes/classes/Scale.js"></script>
    <script src="./gerador_acordes/classes/Chord.js"></script>
    <script src="./gerador_acordes/classes/HarmonicCircle.js"></script>
    <script src="./gerador_acordes/adt/DoubleLinkNode.js"></script>
    <script src="./gerador_acordes/adt/CircularLinkedList.js"></script>
    <script src="./gerador_acordes/adt/Graph.js"></script>
    <script src="./gerador_acordes/adt/Vertex.js"></script>
    <script src="./gerador_acordes/adt/Edge.js"></script>
    <link rel="fonts" href="./gerador_acordes/css/nunito.css">
    <link rel="stylesheet" href="./gerador_acordes/css/styles.css">

</head>

<body >


  <?php include 'Include/nav.php'; ?>


  <h2 class="titulo_topo"> Gerador de Acordes</h2>






    <button type="button" id="finderOption" class="option-button"



        onclick="toggleElements('finderOption', 'finderButtons')">Descobridor de acordes</button>



    <button type="button" id="scaleFinderOption" class="option-button"



        onclick="toggleElements('scaleFinderOption', 'scaleFinderButtons')">Descobridor de escalas</button>



    <button type="button" id="scaleOption" class="option-button"



        onclick="toggleElements('scaleOption', 'ScaleButtons')">Criar Escalas</button>



    <button type="button" id="harmonicCircleOption" class="option-button"



        onclick="toggleElements('harmonicCircleOption', 'ScaleButtons')">Gerador de circulo Harmonico</button>



    <br>



    <img src="./IMG/image 2.webp" width=400 height=230>



    <br>



    <button type="button" id="CButton" class="toggleA-button" data-value="C">C</button>



    <button type="button" id="DButton" class="toggleA-button" data-value="D">D</button>



    <button type="button" id="EButton" class="toggleA-button" data-value="E">E</button>



    <button type="button" id="FButton" class="toggleA-button" data-value="F">F</button>



    <button type="button" id="GButton" class="toggleA-button" data-value="G">G</button>



    <button type="button" id="AButton" class="toggleA-button" data-value="A">A</button>



    <button type="button" id="BButton" class="toggleA-button" data-value="B">B</button>



    <br>



    <button type="button" id="doubleFlatButton" class="toggleB-button" data-value=DOUBLE_FLAT>𝄫</button>



    <button type="button" id="flatButton" class="toggleB-button" data-value=FLAT>♭</button>



    <button type="button" id="naturalButton" class="toggleB-button" data-value=NATURAL>♮</button>



    <button type="button" id="sharpButton" class="toggleB-button" data-value=SHARP>♯</button>



    <button type="button" id="doubleSharpButton" class="toggleB-button" data-value=DOUBLE_SHARP>𝄪</button>







    <div id="finderButtons" class="hidden">



        <br>



        Adicione pelo menos 3 até 7 notas



        <br>



        Calculo estrito <label class="switch"><input type="checkbox" onclick="toggleStrict()"><span



                class="slider round"></span></label>



        <br>



        <button type="button" id="addNoteButton" class="output-button">Adicionar nota</button>



        <button type="button" id="deleteNoteButton" class="output-button">Delete clicked note</button>



    </div>



    <div id="scaleFinderButtons" class="hidden">



        <br>



        Adicione 7 notas para formar uma escala



        <br>



        <button type="button" id="addNoteButton2" class="output-button">Adicionar nota</button>



        <button type="button" id="deleteNoteButton2" class="output-button">Delete clicked note</button>



    </div>



    <div id="selectedNotes" class="hidden"></div>



    <div id="warning"></div>



    <div id="ScaleButtons" class="hidden">



        <select id="scaleSelector" class="chord-select" onchange="handleScale()">



            <option value="DIATONIC" selected>Diatonic (natural)</option>



            <option value="MELODIC_ASC">Melodic (ascending)</option>



            <option value="HARMONIC_MAJOR">Harmonic major</option>



            <option value="HARMONIC_MINOR">Harmonic minor</option>



            <option value="BYZANTINE">Byzantine (double harmonic)</option>



            <option value="NEAPOLITAN_MAJOR">Neapolitan major</option>



            <option value="NEAPOLITAN_MINOR">Neapolitan minor</option>



            <option value="HUNGARIAN_MAJOR">Hungarian major</option>



            <option value="ROMANIAN_MAJOR">Romanian major</option>



        </select>



        <select id="modeSelector" class="chord-select">



            <option value=0 selected>I. Ionian (major)</option>



            <option value=1>II. Dorian</option>



            <option value=2>III. Phrygian</option>



            <option value=3>IV. Lydian</option>



            <option value=4>V. Mixolydian</option>



            <option value=5>VI. Aeolian (minor)</option>



            <option value=6>VII. Locrian</option>



        </select>



        <br>



        Selecione uma raiz de nota, uma escala e modo de cima, depois precione o botao para gerar uma escala



        <br>



        <button type="button" id="scaleButton" class="output-button" onclick="printScale()">Criar Escala</button>



    </div>



    <div id="output"></div>



    <div id="popup" class="popup"></div>

    <div class="baixo">

    <img class="onda" src="./IMG/ondas.png" alt="">




    <h2 class="titulo"> Progressões harmónicas comuns: </h2>

    <p class="texto">São uma lista de progressões harmónicas comuns em diferentes géneros que podes usar como inspiração
       para criares as tuas próprias progressões. Uma progressão harmónica pode ser repetida ou expandida 
       com mais acordes para criar uma progressão mais longa e variada. Confira os exemplos abaixo</p>


      <section class="progressoes-secao">
 
    <div class="progressao-bloco">
      <h2 class="progressao-titulo">POP</h2>
      <div class="progressao-tabela">
        <div class="progressao-linha"><span>C</span><span>G</span><span>Am</span><span>F</span></div>
        <div class="progressao-linha"><span>C</span><span>F</span><span>G</span><span>C</span></div>
        <div class="progressao-linha"><span>C</span><span>F</span><span>Gsus4</span><span>G</span></div>
        <div class="progressao-linha"><span>C</span><span>Am</span><span>Dm</span><span>G</span></div>
        <div class="progressao-linha"><span>C</span><span>Dm</span><span>F</span><span>G</span></div>
        <div class="progressao-linha"><span>C</span><span>G/B</span><span>Am</span><span>G</span></div>
        <div class="progressao-linha"><span>Am</span><span>Dm</span><span>E</span><span>Am</span></div>
        <div class="progressao-linha"><span>Am</span><span>C</span><span>Dm</span><span>Em</span></div>
      </div>
    </div>
 
     <div class="progressao-bloco">
      <h2 class="progressao-titulo">ROCK</h2>
      <div class="progressao-tabela">
        <div class="progressao-linha"><span>C</span><span>Am</span><span>F</span><span>G</span></div>
        <div class="progressao-linha"><span>C</span><span>F</span><span>E♭</span><span>F</span></div>
        <div class="progressao-linha"><span>C</span><span>E</span><span>F</span><span>Fm</span></div>
        <div class="progressao-linha"><span>Dm</span><span>C</span><span>G</span><span>B♭</span></div>
        <div class="progressao-linha"><span>Dm</span><span>C</span><span>G</span><span>B♭</span></div>
        <div class="progressao-linha"><span>G</span><span>G</span><span>F</span><span>C</span></div>
        <div class="progressao-linha"><span>Am</span><span>F</span><span>C</span><span>G</span></div>
        <div class="progressao-linha"><span>Am</span><span>E<sup>7</sup></span><span>D</span><span>G<sup>7</sup></span></div>
      </div>
    </div>


      <div class="progressao-bloco">
      <h2 class="progressao-titulo">JAZZ</h2>
      <div class="progressao-tabela">
        <div class="progressao-linha"><span>Dm<sup>7</sup></span><span>G<sup>7</sup></span><span>C<sup>Δ</sup></span><span>C<sup>Δ</sup></span></div>
        <div class="progressao-linha"><span>Dm<sup>7</sup></span><span>G<sup>7</sup></span><span>C<sup>Δ</sup></span><span>A<sup>7</sup></span></div>
        <div class="progressao-linha"><span>C<sup>Δ</sup></span><span>Am<sup>7</sup></span><span>Dm<sup>7</sup></span><span>G<sup>7</sup></span></div>
        <div class="progressao-linha"><span>C<sup>Δ</sup></span><span>C♯<sup>ø7</sup></span><span>Dm<sup>7</sup></span><span>G<sup>7</sup></span></div>
        <div class="progressao-linha"><span>C<sup>Δ</sup></span><span>C<sup>7</sup></span><span>F<sup>Δ</sup></span><span>Fm<sup>7</sup></span></div>
        <div class="progressao-linha"><span>Am<sup>7(♭5)</sup></span><span>Dm<sup>7</sup></span><span>G<sup>7</sup></span><span>C<sup>Δ</sup></span></div>
        <div class="progressao-linha"><span>Dm<sup>7(♭5)</sup></span><span>G<sup>7</sup></span><span>Cm<sup>7</sup></span><span>Cm<sup>7</sup></span></div>
        <div class="progressao-linha"><span>Cm<sup>7</sup></span><span>G<sup>7</sup></span><span>Cm<sup>7</sup></span><span>G<sup>7</sup></span></div>
      </div>
    </div>
 
    <div class="progressao-bloco">
      <h2 class="progressao-titulo">BLUES</h2>
      <div class="progressao-tabela">
        <div class="progressao-linha"><span>C<sup>7</sup></span><span>C<sup>7</sup></span><span>C<sup>7</sup></span><span>C<sup>7</sup></span></div>
        <div class="progressao-linha"><span>F<sup>7</sup></span><span>F<sup>7</sup></span><span>C<sup>7</sup></span><span>C<sup>7</sup></span></div>
        <div class="progressao-linha"><span>G<sup>7</sup></span><span>F<sup>7</sup></span><span>C<sup>7</sup></span><span>C<sup>7</sup></span></div>
      </div>
    </div>
 



  
 
  </section>





    </div>

     <?php include 'Include/footer.php'; ?>


    <script src="./gerador_acordes/WebUtil.js"></script>
    <script src="./gerador_acordes/MainOptions.js"></script>
    <script src="./gerador_acordes/ChordFinder.js"></script>
    <script src="./gerador_acordes/ScaleFinder.js"></script>
    <script src="./gerador_acordes/ScaleBuilder.js"></script>
    <script src="./gerador_acordes/HarmonicCircleBuilder.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>







</body>


</html>

