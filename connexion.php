<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Poke Brain - Connexion</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link href="assets/css/subscribe.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script> 
        <?php
            include_once 'models/dataBase.php';
            include_once 'models/users.php';
            include_once 'controllers/loginUsers.php';
        ?>
    </head>
    <body>
        <div id="gradient">
            <a href="index.php"><div class="return"><i class="fas fa-arrow-left"></i></div></a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <form class="formInscription" action="/connexion" method="post">
                            <div class="form-group">
                                <label for="inputPseudo">Ton pseudo : </label>
                                <input type="text" class="form-control" id="inputPseudo" aria-describedby="pseudoHelp" placeholder="Entres ton pseudo" name="pseudoLog">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Mot de passe : </label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Entres ton mot de passe" name="passwordLog">
                            </div>
                                <input type="checkbox" id="saveId" name="savePseudo" value="savePseudo">
                                <label for="saveId">Se rappeller de moi</label>
                            <button type="submit" class="submitInscription" name="logInSubmit">Submit</button>
                            <p class="errorsLoginSub"><?= isset($formError['passwordLog']) ? $formError['passwordLog'] : '' ?><?= isset($formError['pseudoLog']) ? $formError['pseudoLog'] : '' ?></p>
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
