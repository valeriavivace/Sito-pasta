<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sito pasta</title>
    <?php
      include("include/meta.php");
    ?>
  </head>
  <body class="page--home">


    <?php
      include("include/header.php");
    ?>



    <div class="container-fluid">
      <main>
        <div class="row">
          <div class="hero-immagine">
            <a href="#">
              <div class="hero-immagine-info">
                <h1 class="bold black">pasta &amp; co.</h1>
                <p class="text-uppercase orange">La pasta online</p>
                <img class="mouse" src="images/132936.svg" alt="">
              </div>
            </a>
          </div>
        </div>
      </main>
    </div>
    <div class="container box-testo">
      <div class="row">
          <h2>Lorem ipsum</h2>
          <hr class="linea-h2">
      </div>
      <div class="row pasta-info">

        <?php

          $immagine = "images/grano.png";
          $titolo = "Il grano";
          $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
          $link = "#";

          include("include/box-pasta-info.php");
        ?>

        <?php

          $immagine = "images/lavorazione.png";
          $titolo = "Trafilata al bronzo";
          $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
          $link = "#";

          include("include/box-pasta-info.php");
        ?>

        <?php
          $immagine = "images/spaghetti.jpg";
          $titolo = "Formati tipici";
          $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
          $link = "#";

          include("include/box-pasta-info.php");
        ?>


      </div>
    </div>
    <div class="container-fluid">
      <div class="row pasta-in-primo-piano">
        <div class="pasta-in-primo-piano_foto col-xs-12 col-md-6">
        </div>
        <div class="pasta-in-primo-piano_info col-xs-12 col-md-6">
          <h2>Let's make magic</h2>
          <hr class="linea-h2">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row box-testo">
        <div class="col-xs-12 col-md-4">
          <h2>Contatti</h2>
          <hr class="linea-h2">
        </div>
        <div class="col-xs-12 col-md-8">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
      </div>
    </div>


    <?php
      include("include/footer.php");
    ?>


  </body>
</html>
