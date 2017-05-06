<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prodotti</title>
    <?php
      include("include/meta.php");
    ?>
  </head>
  <body class="page--prodotti">
    <?php
      include("include/header.php");
    ?>
    <main>
      <div class="container">
        <div class="box-1 row">
          <h2>Prodotti</h2>

          <?php
            $immagine = "images/spaghetti.jpg";
            $titolo = "Che bei prodotti";
            $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
            $link = "#";

            include("include/box-pasta-info.php");
          ?>

          <button id="js-ripple-btn" class="button styl-material">
    				Click for Ripple
    				<svg class="ripple-obj" id="js-ripple">
    					<use height="100" width="100" xlink:href="#ripply-scott" class="js-ripple"></use>
    				</svg>
    			</button>

          <hr class="linea-h2">
        </div>
        <div class="row prodotti">
          <a href="#" class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </a>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
        </div>
        <div class="row prodotti">
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
        </div>
        <div class="row prodotti">
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
        </div>
        <div class="row prodotti">
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
          <div class="box-prodotto col-xs-12 col-md-3">
            <img class="img-responsive" src="images/penna-min.png" alt="">
            <h4 class="bold">Nome prodotto</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="bold">Scopri</a>
          </div>
        </div>
      </div>
    </main>
    <!-- CAROSELLO -->
    <div class="swiper-container carosello">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-prodotto">
              <div class="col-xs-12 col-md-6">
                <h3>Then they show that show to the people who make shows</h3>
                <p>
                  The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brotherʼs.
                </p>
              </div>
              <div class="col-xs-12 col-md-6">
                <img class="img-responsive" src="images/302-min.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide slide-prodotto">
              <div class="col-xs-12 col-md-6">
                <h3>Then they show that show to the people who make shows</h3>
                <p>
                  The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brotherʼs.
                </p>
              </div>
              <div class="col-xs-12 col-md-6">
                <img class="img-responsive" src="images/302-min.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide slide-prodotto">
              <div class="col-xs-12 col-md-6">
                <h3>Then they show that show to the people who make shows</h3>
                <p>
                  The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brotherʼs.
                </p>
              </div>
              <div class="col-xs-12 col-md-6">
                <img class="img-responsive" src="images/302-min.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide slide-prodotto">
              <div class="col-xs-12 col-md-6">
                <h3>Then they show that show to the people who make shows</h3>
                <p>
                  The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brotherʼs.
                </p>
              </div>
              <div class="col-xs-12 col-md-6">
                <img class="img-responsive" src="images/302-min.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide slide-prodotto">
              <div class="col-xs-12 col-md-6">
                <h3>Then they show that show to the people who make shows</h3>
                <p>
                  The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brotherʼs.
                </p>
              </div>
              <div class="col-xs-12 col-md-6">
                <img class="img-responsive" src="images/302-min.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide slide-prodotto">
              <div class="col-xs-12 col-md-6">
                <h3>Then they show that show to the people who make shows</h3>
                <p>
                  The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brotherʼs.
                </p>
              </div>
              <div class="col-xs-12 col-md-6">
                <img class="img-responsive" src="images/302-min.jpg" alt="">
              </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination paginazione"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <?php
      include("include/footer.php");
    ?>
    <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script>
     var swiper = new Swiper('.swiper-container', {
         pagination: '.swiper-pagination',
         paginationClickable: true,
         nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev',
         spaceBetween: 30,
         loop:true
     });
   </script>
     <!-- GreenSock Power : Required for Demo -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
  	<script src="js/ripple-config.js"></script>

    <!-- SVG Sprite -->
	<div style="height: 0; width: 0; position: absolute; visibility: hidden;" aria-hidden="true">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false">
			<symbol id="ripply-scott" viewBox="0 0 100 100">
				<circle id="ripple-shape" cx="1" cy="1" r="1" />
			</symbol>
		</svg>
	</div>
	<!-- /end sprite -->
  </body>
</html>
