<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
include 'controllers/livingDexController.php';
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
    ?>
    <div class="container bodyPage">
        <h1 class="titlePokedex">Pokédex de <?= $_SESSION['pseudo'] ?></h1>
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
                                <div id="cardPkm" class="cardPkm" data-toggle="modal" data-target="#<?= $catchedPokemon->id ?>" style="background-image:url(/assets/pokeball/<?= $catchedPokemon->nameBall ?>.png);">
                                    <div class="cardPokemon"><img src="/assets/shinyGif/<?= $catchedPokemon->nomPkm ?>.png"></div>
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
                                                <img class="col-1 ballModal" src="/assets/minBall/<?=$catchedPokemon->nameBall?>.png">
                                                <p class="col-11" id="namePkmModal">#<?= $catchedPokemon->id ?> - <?= $catchedPokemon->nomPkm ?></p>                                              
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>                                         
                                            </div>                                            
                                            <hr>       
                                            <div id="modal-body">
                                                <div class="row">
                                                    <img class="col-12 imgModal" src="/assets/gifBig/<?=$catchedPokemon->id?>.gif" style="max-width:350px; min-width: 350px;">                                                  
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
<?php include 'vues/footer.php' ?>
    