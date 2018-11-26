<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
?>
<div class="container bodyPage">
    <div class="row">
        <div class="pkmCard" style="background: url('assets/pokedexImage/lugia.png');">
            <div class="banner"></div>
            <div class="triangle"></div>
            <div class="pkmName"><p>Lugia</p></div>
        </div>
        <div class="pkmCardArcanin" style="background: url('assets/pokedexImage/Arcanin.png');">
            <div class="banner"></div>
            <div class="triangleArcanin"></div>
            <div class="pkmName"><p>Arcanin</p></div>
        </div>
        <div class="pkmCard"></div>
        <div class="pkmCard"></div>
    </div>
    <div class="row">
        <span class="col-lg-12 pokedexCase">
            <h2 class="mainTitle">Pokedex</h2>
            <?php
            include 'controllers/showPokemonOnPokedex.php';
            ?>
        </span>
    </div>
    
</div>
</div>
<?php include 'vues/footer.php' ?>