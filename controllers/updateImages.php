<?php
$user = new users();
$user->id = $_SESSION['id'];
$userConnected = $user->connectedInfos();
$safaryFiend = new safaryFriend();
$safaryFiend->idUser = $_SESSION['id'];
$safaryFiend = $safaryFiend->getSafaryByUser();
// On instensie la class user()
//La variable $pseudoList obtient le résultat de la méthode allPseudoUser() de la class user
$pseudoList = $user->allPseudoUser();

$lastId = $user->lastId();
//On crée le tableau vide des erreur
$formError = array();

if (isset($_POST['updatePicture'])) {
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        if (count($formError) == 0) { 
            $user->profilePicture = htmlspecialchars($_FILES['profilePicture']['name']);
            $user->profilePicture = htmlspecialchars($_FILES['profilePicture']['name']);
            $dossier = 'media/img/' . $user->id . '/';
            move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);
            $user->updateProfilePicture();
            $formError['validPicture'] = 'Avatar modifié ! Redirection vers la page de profil !';
            ?>
            <meta http-equiv="refresh" content="1;URL=/mon_profil/<?= $_SESSION['pseudo'] ?>">
            <?php
        }
    }
}

if (isset($_POST['updateBanner'])) {
    if (isset($_FILES['bannerPictures']) && !empty($_FILES['bannerPictures'])) {
        $fichier = basename($_FILES['bannerPictures']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['bannerPictures']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['bannerPictures']['name'], '.');
        if (count($formError) == 0) { 
        $user->banner = htmlspecialchars($_FILES['bannerPictures']['name']);
            $user->banner = htmlspecialchars($_FILES['bannerPictures']['name']);
            $dossier = 'media/banner/' . $user->id . '/';
            move_uploaded_file($_FILES['bannerPictures']['tmp_name'], $dossier . $fichier);
            $user->updateBanner();
            $formError['validPicture'] = 'Avatar modifié ! Redirection vers la page de profil !';
            ?>
            <meta http-equiv="refresh" content="1;URL=/mon_profil/<?= $_SESSION['pseudo'] ?>">
            <?php
        }
    }
}
?>