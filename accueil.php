<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="assets/images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" type="text/css" href="accueil.css" />
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <title>PokeBrain - Connexion</title>
    </head>
    <body>
        <div class="bg"></div>
        <h1>TEST</h1>
        <?php
        // put your code here
        ?>
<div id="scene">
    <div data-depth="1.5"><img src="assets/images/latios.png"></div>
  <div data-depth="1.7"><img src="assets/images/latias.png"></div>
  <div data-depth="0.2"><img src="assets/images/nuage1.png"></div>
  <div data-depth="0.4"><img src="assets/images/nuage2.png"></div>
  <div data-depth="0.6"><img src="assets/images/nuage3.png"></div>
  <div data-depth="0.8"><img src="assets/images/nuage4.png"></div>
  <div data-depth="1.0"><img src="assets/images/nuage5.png"></div>
</div>
    </body>
    <script src="assets/js/parallax.js"></script>
    <script>var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene, {
  relativeInput: true
});
    </script>
</html>