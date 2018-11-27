<?php

if (isset($_GET['nbGen'])) {
    $thePokemon = new pokemons();
    $thePokemon->idGen = $_GET['nbGen'];
    $maxId = $thePokemon->lastPokemonByGen();
    $minId = $thePokemon->firstPokemonByGen();
    for ($nbPkm = $minId['id']; $nbPkm <= $maxId['id']; $nbPkm ++) {
        $thePokemon = new pokemons();
        $thePokemon->id = $nbPkm;
        $thePokemon = $thePokemon->getOnePokemon();

        echo '<span data-tilt><a href="/localisations/' . $thePokemon->nomPkm . '"><div class="pkmCard" style="background: url(\'assets/pokedexImage/' . $nbPkm . '.jpg\');"> <div class="banner"></div> <div class="triangle"></div> <div class="cardPkmName"><p>' . $thePokemon->nomPkm . '</p></div></div></a></span>';


    }
} else {
    $thePokemon = new pokemons();
    $theLastPokemon = $thePokemon->lastPokemon();
    for ($nbPkm = 1; $nbPkm <= $theLastPokemon->id; $nbPkm ++) {
        $thePokemon = new pokemons();
        $thePokemon->id = $nbPkm;
        $thePokemon = $thePokemon->getOnePokemon();

        echo '<span data-tilt><a href="/localisations/' . $thePokemon->nomPkm . '"><div class="pkmCard" style="background: url(\'assets/pokedexImage/' . $nbPkm . '.jpg\');"> <div class="banner"></div> <div class="triangle"></div> <div class="cardPkmName"><p>' . $thePokemon->nomPkm . '</p></div></div></a></span>';


    }
}
?>
