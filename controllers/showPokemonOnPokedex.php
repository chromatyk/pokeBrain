
<?php


if (!empty($_SESSION['id'])) {
    $pokemonPage = new pokemons();
//par défault la première page
    $page = 1;
//on limit l'affichage à 5 patients
    $limit = 12;
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }
    $start = ($page - 1) * $limit;
    $pokemonPagination = $pokemonPage->getPokemonPage($start);

    $pokemonsCount = $pokemonPage->lastPokemon();
    $maxPagination = ceil($pokemonsCount->id / $limit);
}
?>

