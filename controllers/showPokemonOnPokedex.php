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
        echo '<a href="/localisations/' . $thePokemon->nomPkm . '"><img class="minSpritePkm" id="' . $nbPkm . '" src="/assets/minSprite/' . $nbPkm . '.png"></a>';
    }
} else {
    $thePokemon = new pokemons();
    $theLastPokemon = $thePokemon->lastPokemon();
    for ($nbPkm = 1; $nbPkm <= $theLastPokemon->id; $nbPkm ++) {
        $thePokemon = new pokemons();
        $thePokemon->id = $nbPkm;
        $thePokemon = $thePokemon->getOnePokemon();
        echo '<a href="/localisations/' . $thePokemon->nomPkm . '"><img class="minSpritePkm" id="' . $nbPkm . '" src="/assets/minSprite/' . $nbPkm . '.png"></a>';
    }
}
?>
