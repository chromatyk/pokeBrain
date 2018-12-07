<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
?>
<script src="assets/js/versionsGenerationsLocal.js"></script>

<div class="container bodyPage">
    <div class="row">
        <?php
        include 'controllers/showPokemonOnPokedex.php';
        foreach ($pokemonPagination as $pokemonPaginations) {
            ?>        
            <span data-toggle="modal" data-target="#<?= $pokemonPaginations->nomPkm ?>" data-tilt>
                <div class="pkmCard showSingle" target="<?= $pokemonPaginations->id ?>" style="background: url('assets/images/pokedexImage/<?= $pokemonPaginations->id ?>.jpg');"> 
                    <div class="banner"></div> 
                    <div class="triangle"></div> 
                    <div class="cardPkmName">
                        <p><?= $pokemonPaginations->nomPkm ?></p>
                    </div>
                </div>
            </span>
            <div class="modal fade modalPkm " id="<?= $pokemonPaginations->nomPkm ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                
                <div id=""  class="modal-dialog contentModalpokedex" role="document">                                        > 
                    <div class="modal-content contentModalpokedex" role="document">
                        <button type="button" class="close closeModDex" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="container-fluid">
                            <div class="row">
                                <p class="offset-5 nbNamePkmDex">#<?= $pokemonPaginations->id ?> - <?= $pokemonPaginations->nomPkm ?></p>
                            </div>
                            <div class="row">
                                    <div class="offset-2 col-2">
                                        <p style="font-size:30px;color:white">Générations<p/>
                                    </div>
                                    <p id="numberGneration"></p>
                                    <div class="col-lg-5">
                                        <small><a href="#" nbGen="1" class="linkPagePkm">1</a></small>
                                        <small><a href="#" nbGen="2" class="linkPagePkm">2</a></small>
                                        <small><a href="#" nbGen="3" class="linkPagePkm">3</a></small>
                                        <small><a href="#" nbGen="4" class="linkPagePkm">4</a></small>
                                        <small><a href="#" nbGen="5" class="linkPagePkm">5</a></small>
                                        <small><a href="#" nbGen="6" class="linkPagePkm">6</a></small>
                                        <small><a href="#" nbGen="7" class="linkPagePkm">7</a></small>
                                    </div>                               
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <table id="tableLocal" border="1">
                                        <div>
                                            <thead>
                                                <tr>
                                                    <td colspan=3 id="headTableLocal">Localisation</td>
                                                </tr>
                                            </thead>
                                        </div>
                                        <tbody class="bodyTable" idPkmAtt="<?= $pokemonPaginations->id ?>">
                                        </tbody>
                                    </table>
                                </div>
                                <img class="col-5" src="/assets/images/splashart/<?= $pokemonPaginations->id ?>.png" style="position:relative;top:-100px">

                            </div>
                            <div class="row">
                            </div> 
                        </div>                        
                    </div>                       
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="button">
        <a href = "pokedex?page=<?= $page - 1 ?>" class = "<?= $start <= 1 ? 'disabled' : '' ?> btn">Précédente</a>
    </div>
    <div class="button">
        <a href="pokedex?page=<?= $page + 1 ?>" class="<?= $page >= $maxPagination ? 'disabled' : '' ?> btn">Suivante</a>
    </div>
</div>
</div>
<script>
    function keyHandler(e)
    {

        if (!e)
        {
            e = window.event;
        }

        arrowUp = 38;
        arrowDown = 40;
        arrowLeft = 37;
        arrowRight = 39;

        switch (e.keyCode)
        {
            case arrowUp:
//Do something
                break;
            case arrowDown:
//Do something
                break;
            case arrowLeft:

<?php if ($page > 1) { ?>
                    document.location.href = "pokedex?page=<?= $page - 1 ?>";
    <?php
}
?>
                break;
            case arrowRight:
<?php if ($page < $maxPagination) { ?>
                    document.location.href = "pokedex?page=<?= $page + 1 ?>";
    <?php
}
?>
                break;
        }
    }

    document.onkeydown = keyHandler;
</script>
<?php include 'vues/footer.php' ?>