<?php
// Intégration de la vue header composé de la navbar
include_once 'vues/header.php';
// Inégration du modéle dataBase pour éfféctué la connexion à la bas de données
include_once 'models/dataBase.php';
// intégration du modéle user
include_once 'models/users.php';
//Intégration du controlleur addUserController
include_once 'controllers/addUserController.php';
?>
<div class="container bodyPage" id="subscribeContainer">
    <div class="col-lg-12 text-center">
        <!--Affichage des messages d'erreurs si il y en as-->
        <p class="errorsLoginSub"><?= isset($formError['add']) ? $formError['add'] : '' ?></p>
        <p class="errorsLoginSub"><?= isset($formError['redirect']) ? $formError['redirect'] : '' ?></p>
        <h1>Inscription</h1>
    </div>
    <form action="/inscription" method="post" enctype="multipart/form-data">
        <div class="col-lg-offset-4 col-lg-4  topLog">
            <label>Pseudo* : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="text" name="pseudo" class="form-control" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" >
            <p class = "errorsLoginSub"><?= isset($formError['pseudo']) ? $formError['pseudo'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <label>Mot de passe* : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="password" name="password" class="form-control" >
            <p class="errorsLoginSub"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-5">
            <label>Mot de passe (confirmation*) : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="password" name="confPassword" class="form-control" >
            <p class="errorsLoginSub"><?= isset($formError['confPassword']) ? $formError['confPassword'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <label>Adresse mail* : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="email" name="mail" class="form-control" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" >
            <p class="errorsLoginSub"><?= isset($formError['mail']) ? $formError['mail'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-5">
            <label>Adresse mail (confirmation)* : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="email" name="confMail" class="form-control" value="<?= isset($_POST['confMail']) ? $_POST['confMail'] : '' ?>" >
            <p class="errorsLoginSub"><?= isset($formError['confMail']) ? $formError['confMail'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-5">
            <label>Code ami : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="text" name="friendCode" class="form-control" value="<?= isset($_POST['friendCode']) ? $_POST['friendCode'] : '' ?>" >
        </div>
        <div class="form-group col-lg-offset-4 col-lg-5">
            <label>Photo de profil (jpg, jpeg, png) 1mo max  : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="file" name="profilePicture"  value="<?= isset($_POST['profilePicture']) ? $_POST['profilPicture'] : '' ?>" >
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <p class="errorsLoginSub"><?= isset($formError['errorFile']) ? $formError['errorFile'] : '' ?></p>
        </div>
        <div class="form-group form-group col-lg-offset-8 col-lg-2">
            <button type="submit" class="form-control" name="validInscrip"> Valider l'inscription</button>
        </div>
    </form>
</div>
<!-- Intégration de la vue du footer -->
<?php include_once 'vues/footer.php'; ?>