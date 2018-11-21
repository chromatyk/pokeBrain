<?php
include 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/safaryFriend.php';
include_once 'models/hunts.php';
include_once 'controllers/usersInfos.php';
?>
<h1 class="titlePokedex">Pokédex de Ohne</h1>
<div id="pokedex" class="container">
    <div class="row pokedexRow">
        
        <!-- Début de la carte pokémon -->
        <div class="cardPkm">
            
            <div class="cardPokemon"><img src="assets/shinyGif/Steelix.png"></div>
            <div class="cardBall"></div>
            <div class="pkmName">#148 - Kangourex</div>
            <div class="pkmNickname">Tranch'Jambon</div>

        </div>
        <!-- Fin de la carte du pokémon -->
        
                <div class="cardPkmSuper">
            
                    <div class="cardPokemon"><img src="assets/shinyGif/Fouinette.png"></div>
            <div class="cardSuper"></div>
            <div class="pkmName">#148 - Kangourex</div>
            <div class="pkmNickname">Tranch'Jambon</div>

        </div>



    </div>
</div>
<?php
include 'vues/footer.php';
?>

