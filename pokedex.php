<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
?>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <img src="/assets/images/splashart/<?= $pokemonPaginations->id ?>.png" style="width:200px">
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