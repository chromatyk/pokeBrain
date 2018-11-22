<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
include 'controllers/livingDexController.php';
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
    ?>
    <div class="container bodyPage">
        <h1 class="titlePokedex">Pokédex de Ohne</h1>
        <div class="row pokedexRow">
            <?php
            foreach ($catchedPokemon as $catchedPokemon) {
                ?>
                <div class = "boxPkm">
                    <div class = "caseLivingDex">
                        <?php
                        if ($catchedPokemon->catchStatement == 1 && $catchedPokemon->idUser == $_SESSION['id']) {
                            ?>
                            <a href="#">
                                <div id="cardPkm" class="cardPkm" data-toggle="modal" data-target="#exampleModalCenter" style="background-image:url(assets/pokeball/<?= $catchedPokemon->nameBall ?>.png);">
                                    <div class="cardPokemon"><img src="assets/shinyGif/<?= $catchedPokemon->nomPkm ?>.png"></div>
                                    <div class="cardBall"></div>
                                    <div class="pkmName">#<?= $catchedPokemon->id ?> - <?= $catchedPokemon->nomPkm ?></div>
                                    <div class="pkmNickname"><?= $catchedPokemon->nickName ?></div>
                                </div>
                            </a>
                            <div class="boxSpriteCaptured">
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
<div id="pokedex" class="container">    <!-- Modal -->
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
<?php include 'vues/footer.php' ?>
    