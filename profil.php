<?php
include 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/usersInfos.php';
?>
<?php
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
    ?>
    <div class="container  bodyPage">
        <div class="row">
            <div class="col-xs-offset-3 col-sm-offset-0 col-sm-1 col-md-offset-3 col-md-5 col-lg-offset-0 col-lg-1">
                <a href="/modification_avatar"><img  id="profilImage" src="/media/img/<?= $userConnected->id ?>/<?= $userConnected->profilePicture; ?>" /></a>
            </div>
            <div class="col-xs-offset-2 col-lg-offset-10">
                <a href="/modification_des_infos_profils">Modifier le profil</a>
            </div>
            <div class="col-xs-offset-2 col-md-offset-2 col-lg-offset-4">
                <p id="welcomeText" class="mainTitle">Bienvenue, <?= $userConnected->pseudo; ?> !</p>
            </div>
            <div class="col-sm-offset-5 col-md-offset-2 col-lg-offset-4">
                <p id="caProfil">Code Ami : <?= $userConnected->friendCode; ?></p>
            </div>
            <?php
            if (!empty($safaryFiend)) {
                ?>
                <div id = "safariHub">
                    <div class = "col-xs-10 col-sm-11 col-md-9 col-lg-10">
                        <p id = "friendPark" >Safari Ami <img id = "typePark" src = "/assets/spriteSafari/<?= $safaryFiend->type ?>.png"/></p>
                    </div>
                    <div class = "col-xs-offset-2 col-xs-10 col-sm-offset-0 col-sm-10 col-md-offset-0 col-md-9 col-lg-offset-0 col-lg-10">
                        <span id = "pkmPark">
                            <img src = "/assets/spriteSafari/<?= $safaryFiend->firstPokemon ?>.png"/>
                            <img src = "/assets/spriteSafari/<?= $safaryFiend->secondPokemon ?>.png"/>
                            <img src = "/assets/spriteSafari/<?= $safaryFiend->thirdPokemon ?>.png"/>
                        </span>
                        <small><a href="/modification_du_parc">Modifier</a></small>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div id = "safariHub">
                    <div class = "col-xs-10 col-sm-11 col-md-9 col-lg-offset-5">
                        <a href="/ajout_du_parc">Ajout du parc Safari</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div id="infoHub">
            <hr /><hr />
            <div class="row">
                <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                    <textarea id="aboutMe" name="aboutMe" rows="10" cols="83" readonly disabled><?= $userConnected->bioUsers ?></textarea>
                </div>
            </div>
            <div class = "row">
                <hr /><hr />
                <div class = "col-lg-12 progressProfil">
                    <p>Total : <?= round($userConnected->nbUsersHunts / 825 * 100, 2); ?> %</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"aria-valuemin="0" aria-valuemax="100" style="width:<?= round($userConnected->nbUsersHunts / 825 * 100, 2); ?>%"></div>
                    </div>
                </div>
                <?php
                if (!empty($finishedHuntByGen)) {
                    ?>
                    <button id = "moreProgress">+</button>
                    <button id = "reduceProgress">-</button>
                    <div id = "subprogress">
                        <?php if (isset($finishedHuntByGen[0])) { ?>
                            <div class = "col-lg-6 progressProfil">
                                <p>Génération <?= $finishedHuntByGen[0]->idGen ?> = <?= round($finishedHuntByGen[0]->numberOfFinishedHunt / 151 * 100, 2); ?> %</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"aria-valuemin="0" aria-valuemax="100" style="width:<?= round($finishedHuntByGen[0]->numberOfFinishedHunt / 151 * 100, 2); ?>%"></div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (isset($finishedHuntByGen[1])) { ?>
                            <div class = "col-lg-6 progressProfil">
                                <p>Génération <?= $finishedHuntByGen[1]->idGen ?> = <?= round($finishedHuntByGen[1]->numberOfFinishedHunt / 99 * 100, 2); ?> %</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"aria-valuemin="0" aria-valuemax="100" style="width:<?= round($finishedHuntByGen[1]->numberOfFinishedHunt / 99 * 100, 2); ?>%"></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="container  bodyPage">
        <center>Pour voir votre profil veuillez vous connectez ou vous inscrire</center>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="/connexion" alt="connexion" id="subscribe">Connexion / Inscription</a>
            </div>
        </div>
    </div>
    <?php
}
?>
</div>
<?php
include 'vues/footer.php';
?>

