<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lectus | Onde a leitura encontra o conforto</title>
  <link rel="icon" href="./View/assets/lectus_logo1.svg" type="image/x-icon" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./View/style.css" />
</head>

<body class="container">
  <?php require_once ('./View/navbar.php') ?>

  <main>
    <section id="page1">
      <img class="glitters" src="./View/assets/glitters.svg" alt="" />

      <div class="pageText">
        <h1>Onde a leitura</h1>
        <h2>encontra o conforto</h2>
        <p>
          Um espaço onde cada página traz conforto e cada história se torna
          uma jornada inesquecível.
        </p>
      </div>

      <div class="shelf">
        <img class="circle1" src="./View/assets/circle 1.svg" alt="Círculo roxo" />
      </div>

      <div class="glasses">
        <img src="./View/assets/glasses.svg" alt="Óculos com hastes roxa" />
      </div>

      <div class="books">
        <img src="./View/assets/books.svg" alt="5 livros deitados empilhados um em cima do outro" />
      </div>
    </section>

    <section id="page2">
      <div class="lastRelease">
        <h3>Últimos lançamentos</h3>
      </div>

      <div class="releaseContainer">
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
      </div>
    </section>

    <section id="page3">
      <div class="mostWanted">
        <h3>Mais procurados de hoje</h3>
      </div>

      <div class="mostWantedContainer">
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
        <a class="book">
          <img src="./View/assets/capa teste.jpg" alt="Capa do livro" />
        </a>
      </div>
    </section>
  </main>

  <footer>
    <div class="footerBackground">
      <svg class="footerDesign" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900">
        <defs>
          <path id="wave" fill="#7C7CF9" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
      s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
        </defs>
        <g>
          <use xlink:href="#wave" opacity=".4">
            <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline"
              values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
              repeatCount="indefinite" />
          </use>
          <use xlink:href="#wave" opacity=".6">
            <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline"
              values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
              repeatCount="indefinite" />
          </use>
          <use xlink:href="#wave" opacty=".9">
            <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="4s" calcMode="spline"
              values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
              repeatCount="indefinite" />
          </use>
        </g>
      </svg>
    </div>

    <section class="footerNav">
      <ul class="socials">
        <li><a href="x.com" class="fa-brands fa-x-twitter"></a></li>
        <li><a href="instagram.com" class="fa-brands fa-instagram"></a></li>
        <li><a href="facebook.com" class="fa-brands fa-facebook"></a></li>
      </ul>
      <ul class="links">
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Quem Somos</a></li>
        <li><a href="#">Cadastro de Livros</a></li>
        <li><a href="#">Cadastro de Autores</a></li>
        <li><a href="#">Termos de Uso</a></li>
      </ul>
      <p class="legal">© 2024 Todos os direitos reservados</p>
    </section>
  </footer>
</body>

</html>