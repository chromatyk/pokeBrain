<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/versions.php';
include_once 'models/hunts.php';
include 'controllers/livingDexController.php';
include_once 'controllers/huntController.php';
?>
<script src="assets/js/methodShasse.js"></script>
<?php
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
    ?>
    <div class="container bodyPage pokedexModal">
        <div class="row pokedexName">
            <h1 class="titlePokedex offset-lg-4">Pokédex de <?= $_SESSION['pseudo'] ?></h1>
            <div class="addButton" data-toggle="modal" data-target="#exampleModalCenter"><div class="textAdd">Ajout</div></div>
        </div>
<?php 
include_once 'vues/huntHub.php'; ?>

<div id="pokedex" class="row pokedexRow">
            <?php
            foreach ($catchedPokemon as $catchedPokemon) {
                ?>
                <div class = "boxPkm">
                    <div class = "caseLivingDex">
                        <?php
                        if ($catchedPokemon->catchStatement == 1 && $catchedPokemon->idUser == $_SESSION['id']) {
                            ?>
                            <a href="#" id="boxGlobalPkm">
                                <div id="cardPkm" class="cardPkm" data-toggle="modal" data-target="#<?= $catchedPokemon->id ?>"
                                <?php
                                if (!empty($catchedPokemon->nameBall)) {
                                    ?>style="background-image:url(/assets/images/pokeball/<?= $catchedPokemon->nameBall ?>.png);"><?php } else {
                                    ?>style="background-image:url(/assets/images/pokeball/Poke.png);"><?php } ?>
                                    <div class="cardPokemon"><img src="/assets/images/shinyGif/<?= $catchedPokemon->nomPkm ?>.png"></div>
                                    <div class="cardBall"></div>
                                    <div class="pkmName">#<?= $catchedPokemon->id ?> - <?= $catchedPokemon->nomPkm ?></div>
                                    <div class="pkmNickname"><?= $catchedPokemon->nickName ?></div>
                                </div>
                            </a>                            
                            <div id="pokedex" class="container">    <!-- Modal -->
                                <div class="modal fade modalPkm" id="<?= $catchedPokemon->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="row">
                                                <?php
                                                if (!empty($catchedPokemon->nameBall)) {
                                                    ?><img class="col-1 ballModal" src="/assets/images/minBall/<?= $catchedPokemon->nameBall ?>.png"><?php } else {
                                                    ?><img class="col-1 ballModal" src="/assets/images/minBall/Poke.png"><?php } ?>

                                                <p class="col-11" id="namePkmModal">#<?= $catchedPokemon->id ?> - <?= $catchedPokemon->nomPkm ?></p>                                              
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>                                         
                                            </div>                                            
                                            <hr>       
                                            <div id="modal-body">
                                                <div class="row">
                                                    <img class="col-12 imgModal" src="/assets/images/gifBig/<?= $catchedPokemon->id ?>.gif" style="max-width:100px; min-width: 300px;">                                                  
                                                </div>
                                                <br>
                                                <p id="nickNameModal"><?= $catchedPokemon->nickName ?></p>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-4 categoriesModal">
                                                        <center><p> Charme Chroma : Avec</p></center>
                                                    </div>

                                                    <div class="col-4 categoriesModal">
                                                        <center><p> Version :<br> Let's Go Evoli</p></center>
                                                    </div>

                                                    <div class="col-4 categoriesModal">
                                                        <center><p> Méthode :<br> Chaîne parfaite</p></center>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6 categoriesModal">
                                                        <center><p> Nombres de rencontres :<br>10 853</p></center>
                                                    </div>

                                                    <div class="col-6 categoriesModal">
                                                        <center><p> Date de capture :<br> 18/05/2018 23:30:02</p></center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <?php
}
?>
<?php
include_once 'vues/footer.php';
?>
