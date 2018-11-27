<?php
include '../models/dataBase.php';
include '../models/pokemons.php';
$thePokemon = new pokemons();
$maxId = $thePokemon->lastPokemon();
$randomNumber = rand(1, $maxId->id);
$thePokemon->id = $randomNumber;
$thePokemon = $thePokemon->getOnePokemon();
echo $thePokemon->nomPkm;
?>