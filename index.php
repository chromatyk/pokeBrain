<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="assets/images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/home.css" />
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <title>PokeBrain - Accueil</title>
    </head>
    <body class="bg">
       <div class="d-none d-lg-block">
            <div data-relative-input="true" id="scene" style="width: auto; height: auto;">
    <div class="layer" data-depth="1.5"><img src="assets/images/latios.png"></div>
  <div class="layer" data-depth="1.7"><img src="assets/images/latias.png"></div>
  <div class="layer" data-depth="0.2"><img src="assets/images/nuage1.png"></div>
  <div class="layer" data-depth="0.4"><img src="assets/images/nuage2.png"></div>
  <div class="layer" data-depth="0.6"><img src="assets/images/nuage3.png"></div>
  <div class="layer" data-depth="0.8"><img src="assets/images/nuage4.png"></div>
  <div class="layer" data-depth="1.0"><img src="assets/images/nuage5.png"></div>
</div>
        </div>
        <div class="container col" id="homePanel">
          <div class="row">
            <div class="col">
                <img id="homeLogo" src="assets/images/pbLogoTxt.png" alt="Logo Texte PokeBrain" title="PokeBrain" width="150"> 
            </div>
          </div>            
          <div class="row">
             <div class="col">
               <h1 id="title"><span id="pokeTitle" >Poke</span> <span id="brainTitle" >Brain</span></h1>
             </div>
           </div>
           <div class="row">
            <div class="col">
                <p class="homeText">Poke Brain est un outil d'aide à la shasse de Pokemons chromatiques sur lequel tu pourras suivre l'enssemble de tes shasses en cours ou terminées </p>
                <p class="homeText">De nombreux outils seront également mis à ta disposition afin de faciliter tes shasses.<br>
                Poke Brain est un site à but communautaire sur lequel tu pourras intéragir avec les autres utilisateurs afin de comparer ta pogression, échanger des informations et des aides, c'est pourquoi nous vous demandons de toujours rester courtois.</p>
                <p class="homeText">Pour accéder au site il faudra te connecter, si tu ne possèdes pas de compte inscris-toi gratuitement.</p>
             </div>
            </div>
            <div class="row">
                <div class="col"> 
                    <div class="btn-bg Pokemon">    
                        <div class="btn-group">
                            <div class="btn ball">
                                <form style="display : inline" action="connexion" method="GET">
                                    <button>
                                        <div class="pokemon-ball"></div>
                                        <a>Se connecter<span data-letters="Go!"></span><span data-letters="Go!"></span></a>
                                    </button>                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col"> 
                    <div class="btn-bg Pokemon">    
                        <div class="btn-group">
                            <div class="btn ball">
                                <form style="display : inline" action="inscription" method="GET">
                                    <button>
                                        <div class="pokemon-ball"></div>
                                        <a>S'inscrire<span data-letters="Go!"></span><span data-letters="Go!"></span></a>
                                    </button>                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>    
    <script src="assets/js/parallax.js"></script>
    <script>var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene, {
  relativeInput: true
});
    </script>
</html>
