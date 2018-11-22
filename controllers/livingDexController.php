<?php

$allPokemon = new pokemons();
if (isset($_SESSION['id'])) {
    $allPokemon->idUser = $_SESSION['id'];
    $catchedPokemon = $allPokemon->getCatchedPokemonByIdUsers();
}
?>
