<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contatti</title>
    <?php
      include("include/meta.php");
    ?>
  </head>
  <body class="page--contatti">
    <?php
      include("include/header.php");
    ?>
    <main>
      <div class="border-contatti">
        <div class="container">
          <div class="row box-contatti input-animazione">
            <div class="form-container-2 col-xs-12 col-md-4">
              <div class="box-1">
                <h2>Get in touch</h2>
                <hr class="linea-h2">
              </div>
              <form>
                <input id="first-input-2" type="text" placeholder="Your name" required />
                <input id="second-input-2" type="email" placeholder="Valid email" required />
                <textarea id="msg-2" placeholder="Your message"> </textarea>
                <a href="#" class="ancora-messaggio bold text-uppercase text-center">Send message</a>
              </form>
            </div>
            <div class="col-xs-12 col-md-8">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.487495936766!2d14.524792315240681!3d40.68525997933478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133bbd8448bd5eed%3A0x6d04f2ab37b27568!2sGragnano+(Sigliano)!5e0!3m2!1sit!2sit!4v1493678201729" height="800" frameborder="0" ></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row box-testo">
          <div class="box1 col-xs-12 col-md-4">
            <h2>Contatti</h2>
            <hr class="linea-h2">
          </div>
          <div class="col-xs-12 col-md-8">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </div>
      </div>
    </main>
    <?php
      include("include/footer.php");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/static/scripts/bootstrap.min.js"></script>
    <script src="js/static/scripts/prism.js"></script>
    <script src="js/src/foxholder.js"></script>
    <script src="js/static/scripts/script.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66794691-3', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
