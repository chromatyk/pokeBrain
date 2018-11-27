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
            <span data-tilt><a href="/localisations/<?= $pokemonPaginations->nomPkm ?>"><div class="pkmCard" style="background: url('assets/pokedexImage/<?= $pokemonPaginations->id ?>.jpg');"> <div class="banner"></div> <div class="triangle"></div> <div class="cardPkmName"><p><?= $pokemonPaginations->nomPkm ?></p></div></div></a></span>       
<?php } ?>

        
    </div>
<a href = "pokedex?page=<?= $page - 1 ?>" class = "<?= $start <= 1 ? 'disabled' : '' ?> btn">Précédente</a>
        <a href="pokedex?page=<?= $page + 1 ?>" class="<?= $page >= $maxPagination ? 'disabled' : '' ?> btn">Suivante</a>

</div>
</div>
<?php include 'vues/footer.php' ?>