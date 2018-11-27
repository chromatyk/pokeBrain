<?php

$allVersion = new versions();
$allVersion = $allVersion->getAllVersions();

$currentPokemon = new pokemons();
$currentPokemon->nomPkm = $_GET['pokemonName'];
$selectedPokemon = $currentPokemon->currentPokemon();
$currentName = $selectedPokemon->nomPkm;
$previousPkm = $selectedPokemon->id - 1;
$nextPkm = $selectedPokemon->id + 1;
$lastPokemon = $currentPokemon->lastPokemon();
$maxId = $lastPokemon->id;
$lastPokemonMoinsUn = $lastPokemon->id - 1;
$lastPokemon = $lastPokemon->nomPkm;
$firstPokemon = $currentPokemon->firstPokemon();
$firstPokemon = $firstPokemon->nomPkm;

$currentPokemon->id = $nextPkm;
$nextPokemon = $currentPokemon->nextPokemon();

if ($selectedPokemon->id >= $maxId) {

} else {
    $nextPokemon = $nextPokemon->nomPkm;
}
$currentPokemon->id = $previousPkm;
$previousPokemon = $currentPokemon->previousPokemon();
if ($selectedPokemon->id <= 1) {

} else {
    $previousPokemon = $previousPokemon->nomPkm;
}
?>

