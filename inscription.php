<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>C'est l'inscription OUAIS OUAIS</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/inscription.css" />
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <?php
            include_once 'models/dataBase.php';
            // intégration du modéle user
            include_once 'models/users.php';
            //Intégration du controlleur addUserController
            include_once 'controllers/addUserController.php';
        ?>
    </head>
    <body>
        <div class="col-lg-12 text-center">
        <!--Affichage des messages d'erreurs si il y en as-->
        <p class="errorsLoginSub"><?= isset($formError['add']) ? $formError['add'] : '' ?></p>
        <p class="errorsLoginSub"><?= isset($formError['redirect']) ? $formError['redirect'] : '' ?></p>
        <h1>Inscription</h1>
</div>
        <div id="gradient">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <form class="formInscription" action="/inscription" method="post">
                            <div class="form-group">
                                <label for="inputPseudo">Ton pseudo : </label>
                                <input type="text" class="form-control" id="inputPseudo" aria-describedby="pseudoHelp" placeholder="Entres ton pseudo" name="pseudo">
                                <p class = "errorsLoginSub"><?= isset($formError['pseudo']) ? $formError['pseudo'] : '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Mot de passe : </label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Entres ton mot de passe" name="password">
                                <p class="errorsLoginSub"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordConfirmation">Confirmation du mot de passe : </label>
                                <input type="password" class="form-control" id="inputPasswordConfirmation" placeholder="Confirmes ton mot de passe" name="confPassword">
                                <p class="errorsLoginSub"><?= isset($formError['confPassword']) ? $formError['confPassword'] : '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="inputMail">E-mail : </label>
                                <input type="email" class="form-control" id="inputMail" placeholder="Entres ton e-mail" name="mail">
                                <small id="inputMail" class="form-text text-muted">Nous ne divulgerons jamais cette donnée.</small>
                                <p class="errorsLoginSub"><?= isset($formError['mail']) ? $formError['mail'] : '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="inputMailConfirmation">Confirmation mail :</label>
                                <input type="email" class="form-control" id="inputMailConfirmation" placeholder="Confirmes ton e-mail" name="confMail">
                                <p class="errorsLoginSub"><?= isset($formError['confMail']) ? $formError['confMail'] : '' ?></p>
                            </div>
                            <div class="form-group">
                                <label for="inputFriendCode">Code Ami</label>
                                <input type="text" class="form-control" id="inputFriendCode" placeholder="8888-8888-8888" name="friendCode">
                            </div>
                            <button type="submit" class="submitInscription" name="validInscrip">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>

        var colors = new Array(
                [62, 35, 255],
                [60, 255, 60],
                [255, 35, 98],
                [45, 175, 230],
                [255, 0, 255],
                [255, 128, 0]);

        var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
        var colorIndices = [0, 1, 2, 3];

//transition speed
        var gradientSpeed = 0.002;

        function updateGradient()
        {

            if ($ === undefined)
                return;

            var c0_0 = colors[colorIndices[0]];
            var c0_1 = colors[colorIndices[1]];
            var c1_0 = colors[colorIndices[2]];
            var c1_1 = colors[colorIndices[3]];

            var istep = 1 - step;
            var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
            var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
            var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
            var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";

            var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
            var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
            var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
            var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";

            $('#gradient').css({
                background: "-webkit-gradient(linear, left top, right top, from(" + color1 + "), to(" + color2 + "))"}).css({
                background: "-moz-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"});

            step += gradientSpeed;
            if (step >= 1)
            {
                step %= 1;
                colorIndices[0] = colorIndices[1];
                colorIndices[2] = colorIndices[3];

                //pick two new target color indices
                //do not pick the same as the current one
                colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
                colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;

            }
        }

        setInterval(updateGradient, 10);
    </script>
</html>
