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
        <a href="#"><div class="cardPkm" data-toggle="modal" data-target="#exampleModalCenter">
            
            <div class="cardPokemon"><img src="assets/shinyGif/Steelix.png"></div>
            <div class="cardBall"></div>
            <div class="pkmName">#148 - Kangourex</div>
            <div class="pkmNickname">Tranch'Jambon</div>

        </div></a>
        <!-- Fin de la carte du pokémon -->
        
                <div class="cardPkmSuper">
            
                    <div class="cardPokemon"><img src="assets/shinyGif/Fouinette.png"></div>
            <div class="cardSuper"></div>
            <div class="pkmName">#148 - Kangourex</div>
            <div class="pkmNickname">Tranch'Jambon</div>

        </div>



    </div>
    
    <!-- Modal -->
<div class="modal fade modalPkm" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
</div>
<?php
include 'vues/footer.php';
?>

