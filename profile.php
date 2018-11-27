<?php
include 'vues/header.php';
include 'controllers/updateImages.php';
?>
<div class="cardProfile">
    <div class="profilePicture">
        <img id="previewing" src="<?php if (!empty($userConnected->profilePicture)) { ?>/media/img/<?= $userConnected->id ?>/<?= $userConnected->profilePicture;
} else { ?>/assets/images/zarbi.png<?php } ?> "/>

        <form id="formPictures" action="" method="POST"  enctype="multipart/form-data">
            <input type="file" name="profilePicture" id="file" required />
            <button id="validPictures" type="submit" class="btn" name="updatePicture" value="Valider modification">Valider modification</button>
        </form>
    </div>
    <div class="profileInfos">
        <div id="pseudo"><?= $userConnected->pseudo; ?></div>
        <div id="titleMember">Maître de la ligue</div>
        <div id="numberShinies">Nombre de shiny : <?= $userConnected->nbUsersHunts ?></div>
        <hr/>
        <div id="biouser"><?= $userConnected->bioUsers ?></div>
    </div>
</div>
<div class="tile" data-scale="1.05" data-image="/assets/images/banniere.png"></div>
<div class="safariPark col-xs-12 offset-lg-3 col-lg-8">
<?php if (isset($finishedHuntByGen)) { ?>
        <p class="progressHunt">Progression globale : <?= $userConnected->nbUsersHunts ?> / 805 - <?= round($userConnected->nbUsersHunts / 805 * 100, 2); ?>%</p>
        <div class="progress">
            <div class="progress-bar" style="width:<?=
            round($userConnected->nbUsersHunts / 805 * 100, 2);
            ;
            ?>%"></div>
        </div>
        <center><a class="detailsHunt" href="/collection/<?= $_SESSION['pseudo'] ?>" title="Détails de la progression">Détails</a></center> 
<?php } else { ?>
        <p class="progressHunt">0 / 805 - 0%</p>
        <div class="progress" style="width:100px;">
            <div class="progress-bar" style="width:0%"></div>
        </div>
        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center>
<?php } ?>
    <div class="col-sm-offset-5 col-md-offset-2 col-lg-offset-4">
        <center><p id="caProfil">Code Ami : <?= $userConnected->friendCode; ?></p></center>
    </div>
    <?php
    if ($safaryFriend) {
        ?>
        <center><div id = "safariHub">
                <div class = "col-xs-10 col-sm-11 col-md-9 col-lg-10">
                    <p id = "friendPark" >Safari Ami </p>
                    <center><img id = "typePark" src = "/assets/spriteSafari/<?= $safaryFriend->type ?>.png"/></center>
                </div>
                <div class = "col-xs-offset-2 col-xs-10 col-sm-offset-0 col-sm-10 col-md-offset-0 col-md-9 col-lg-offset-0 col-lg-10">
                    <span id = "pkmPark">
                        <img src = "/assets/spriteSafari/<?= $safaryFriend->firstPokemon ?>.png"/>
                        <img src = "/assets/spriteSafari/<?= $safaryFriend->secondPokemon ?>.png"/>
                        <img src = "/assets/spriteSafari/<?= $safaryFriend->thirdPokemon ?>.png"/>
                    </span>
                </div>
            </div></center>
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
<div class="gen1 offset-lg-3 col-lg-8">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <p class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Génération 1
                    </p>
                </h5>
            </div>
<?php if (isset($finishedHuntByGen[0])) { ?>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt"><?= $finishedHuntByGen[0]->numberOfFinishedHunt ?> / 151 - <?= round($finishedHuntByGen[0]->numberOfFinishedHunt / 151 * 100, 2); ?>%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?= round($finishedHuntByGen[0]->numberOfFinishedHunt / 151 * 100, 2); ?>%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } else { ?>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt">0 / 151 - 0%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:0%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } ?>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Génération 2
                    </p>
                </h5>
            </div>
<?php if (isset($finishedHuntByGen[1])) { ?>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt"><?= $finishedHuntByGen[1]->numberOfFinishedHunt ?> / 99 - <?= round($finishedHuntByGen[1]->numberOfFinishedHunt / 99 * 100, 2); ?>%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?= round($finishedHuntByGen[1]->numberOfFinishedHunt / 99 * 100, 2); ?>%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } else { ?>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt">0 / 99 - 0%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:0%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } ?>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Génération 3
                    </p>
                </h5>
            </div>
<?php if (isset($finishedHuntByGen[2])) { ?>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt"><?= $finishedHuntByGen[2]->numberOfFinishedHunt ?> / 134 - <?= round($finishedHuntByGen[2]->numberOfFinishedHunt / 134 * 100, 2); ?>%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?= round($finishedHuntByGen[2]->numberOfFinishedHunt / 134 * 100, 2); ?>%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } else { ?>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt">0 / 134 - 0%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:0%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } ?>
        </div>

        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Génération 4
                    </p>
                </h5>
            </div>
<?php if (isset($finishedHuntByGen[3])) { ?>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt"><?= $finishedHuntByGen[3]->numberOfFinishedHunt ?> / 106 - <?= round($finishedHuntByGen[3]->numberOfFinishedHunt / 106 * 100, 2); ?>%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?= round($finishedHuntByGen[3]->numberOfFinishedHunt / 106 * 100, 2); ?>%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } else { ?>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt">0 / 106 - 0%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:0%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } ?>
        </div>

        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Génération 5
                    </p>
                </h5>
            </div>
<?php if (isset($finishedHuntByGen[4])) { ?>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt"><?= $finishedHuntByGen[4]->numberOfFinishedHunt ?> / 156 - <?= round($finishedHuntByGen[4]->numberOfFinishedHunt / 156 * 100, 2); ?>%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?= round($finishedHuntByGen[4]->numberOfFinishedHunt / 156 * 100, 2); ?>%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } else { ?>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt">0 / 156 - 0%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:0%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } ?>
        </div>
        <div class="card">
            <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Génération 6
                    </p>
                </h5>
            </div>
<?php if (isset($finishedHuntByGen[5])) { ?>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt"><?= $finishedHuntByGen[5]->numberOfFinishedHunt ?> / 71 - <?= round($finishedHuntByGen[5]->numberOfFinishedHunt / 71 * 100, 2); ?>%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?= round($finishedHuntByGen[5]->numberOfFinishedHunt / 71 * 100, 2); ?>%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } else { ?>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt">0 / 71 - 0%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:0%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } ?>
        </div>

        <div class="card">
            <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Génération 7
                    </p>
                </h5>
            </div>
<?php if (isset($finishedHuntByGen[6])) { ?>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt"><?= $finishedHuntByGen[6]->numberOfFinishedHunt ?> / 87 - <?= round($finishedHuntByGen[6]->numberOfFinishedHunt / 87 * 100, 2); ?>%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?= round($finishedHuntByGen[6]->numberOfFinishedHunt / 87 * 100, 2); ?>%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } else { ?>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <p class="progressHunt">0 / 87 - 0%</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:0%"></div>
                        </div>
                        <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                    </div>
                </div>
<?php } ?>
        </div>
    </div>
</div>
<script src="/assets/js/parallax.js"></script>
<script src="/assets/js/updateImages.js" type="text/javascript"></script>
<?php
include 'vues/footer.php';
?>
