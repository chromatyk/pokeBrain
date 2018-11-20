<?php
if (isset($_POST['allPokemonsByType'])) {
    include_once '../models/dataBase.php';
    include_once '../models/safaryFriend.php';
    $allPokemonByType = array();
    $allAboutSafary = new safaryFriend();
    $allAboutSafary->type = $_POST['allPokemonsByType'];
    $allAboutSafary->nbPokemon = $_POST['nbPkmFirst'];
    $allPokemonFirstByType = $allAboutSafary->getFirstPokemonsByType();
    $allAboutSafary->nbPokemon = $_POST['nbPkmSecond'];
    $allPokemonSecondByType = $allAboutSafary->getFirstPokemonsByType();
    $allAboutSafary->nbPokemon = $_POST['nbPkmThird'];
    $allPokemonThirdByType = $allAboutSafary->getFirstPokemonsByType();
    $allPokemonByType[] = $allPokemonFirstByType;
    $allPokemonByType[] = $allPokemonSecondByType;
    $allPokemonByType[] = $allPokemonThirdByType;
    echo json_encode($allPokemonByType);
} else {
    $allAboutSafary = new safaryFriend();
    $safaryType = $allAboutSafary->getAllSafaryType();
}
if (isset($_POST['addSafary'])) {
    $error = array();
    if (isset($_POST['firstPokemon']) && isset($_POST ['secondPokemon']) && isset($_SESSION['id'])) {
        $allAboutSafary->type = $_POST['type'];
        $allAboutSafary->firstPokemon = $_POST['firstPokemon'];
        $allAboutSafary->secondPokemon = $_POST['secondPokemon'];
        $allAboutSafary->thirdPokemon = $_POST['thirdPokemon'];
        $allAboutSafary->idUser = $_SESSION['id'];
        $allAboutSafary->addSafaryUser();
        $error['ValidAddSafary'] = 'Votre parc à bien été ajouté, vous allez êtres redirigé vers votre profil !';
        if (isset($error['ValidAddSafary'])) {
            ?>
            <meta http-equiv="refresh" content="1;URL=/mon_profil/<?= $_SESSION['pseudo'] ?>">
            <?php
        }
    } else {
        $error['echecAddSafary'] = 'Erreur dans l\'ajout de votre safari amis';
    }
}
if (isset($_GET['updateSafary'])) {
    $safaryFiend = new safaryFriend();
    $safaryFiend->idUser = $_SESSION['id'];
    $safaryFiend = $safaryFiend->getSafaryByUser();
    if (isset($_POST['allPokemonsByType'])) {
        include_once '../models/dataBase.php';
        include_once '../models/safaryFriend.php';
        $allPokemonByType = array();
        $allAboutSafary = new safaryFriend();
        $allAboutSafary->type = $_POST['allPokemonsByType'];
        $allAboutSafary->nbPokemon = $_POST['nbPkmFirst'];
        $allPokemonFirstByType = $allAboutSafary->getFirstPokemonsByType();
        $allAboutSafary->nbPokemon = $_POST['nbPkmSecond'];
        $allPokemonSecondByType = $allAboutSafary->getFirstPokemonsByType();
        $allAboutSafary->nbPokemon = $_POST['nbPkmThird'];
        $allPokemonThirdByType = $allAboutSafary->getFirstPokemonsByType();
        $allPokemonByType[] = $allPokemonFirstByType;
        $allPokemonByType[] = $allPokemonSecondByType;
        $allPokemonByType[] = $allPokemonThirdByType;
        echo json_encode($allPokemonByType);
    } else {
        $allAboutSafary = new safaryFriend();
        $safaryType = $allAboutSafary->getAllSafaryType();
    }
    if (isset($_POST['updateSafary'])) {
        $error = array();
        if (isset($_POST['firstPokemon']) && isset($_POST ['secondPokemon']) && isset($_SESSION['id'])) {
            $allAboutSafary->type = $_POST['type'];
            $allAboutSafary->firstPokemon = $_POST['firstPokemon'];
            $allAboutSafary->secondPokemon = $_POST['secondPokemon'];
            $allAboutSafary->thirdPokemon = $_POST['thirdPokemon'];
            $allAboutSafary->idUser = $_SESSION['id'];
            $allAboutSafary->updateSafary();
            $error['ValidAddSafary'] = 'Votre parc à bien été modifié, vous allez êtres redirigé vers votre profil !';
            if (isset($error['ValidAddSafary'])) {
                ?>
                <meta http-equiv="refresh" content="1;URL=/mon_profil/<?= $_SESSION['pseudo'] ?>">
                <?php
            }
        } else {
            $error['echecAddSafary'] = 'Erreur dans l\'ajout de votre safari amis';
        }
    }
}
?>