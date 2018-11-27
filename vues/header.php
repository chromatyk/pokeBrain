<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet"> 
        <link rel="icon" type="image/png" href="/assets/images/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/home.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/header.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/profile.css" />
        <link href="../assets/css/collection.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>PokeBrain</title>
    </head>
    <body>
        <?php
        include_once 'models/dataBase.php';
        include_once 'models/users.php';
        include_once 'models/safaryFriend.php';
        include_once 'models/hunts.php';
        include_once 'controllers/usersInfos.php';
        ?>
        <div class="menu-wrap">
            <nav class="menu-top">
                <div class="profile"><img id="navProfilImg" src="/assets/images/Lexae.png" alt="Matthew Greenberg"/><span id="pseudoTitle"><?= $userConnected->pseudo; ?> - Maître de la Ligue</span></div>
                <div class="icon-list">
                    <a href="#"><i class="far fa-star"></i></a>
                    <a href="#"><i class="far fa-bell"></i></a>
                    <a href="#"><i class="far fa-envelope"></i></a>
                    <a href="#"><i class="far fa-comment"></i></a>
                </div>
            </nav>
            <nav class="menu-side">
                <a href="/mon_profil/<?= $_SESSION['pseudo']?>">Profil</a>
                <a href="/collection/<?= $_SESSION['pseudo']?>">Collection</a>
                <a href="/pokedex">Pokedex</a>
                <a href="#">StreamLand</a>
                <a href="#">Shasse</a>
            </nav>
        </div>
        <div class="contenu">
            <button class="menu-button" id="open-button">Open Menu</button>
            <div class="content-wrap">
                <div class="content">
                    <nav class="codrops-demos">
                    </nav>

                    

