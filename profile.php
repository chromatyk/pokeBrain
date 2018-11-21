<?php
include 'vues/header.php';
?>
<div class="cardProfile">
    <div class="profilePicture"><img src="/assets/images/Lexae.png"></div>
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

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p class="progressHunt">151 / 151 - 100%</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:100%"></div>
                    </div>
                    <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center> 
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Génération 2
                    </p>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <p class="progressHunt">151 / 151 - 100%</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:80%"></div>
                    </div>
                    <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center>                 
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Génération 3
                    </p>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <p class="progressHunt">151 / 151 - 100%</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:60%"></div>
                    </div>
                    <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center>                 
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Génération 4
                    </p>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    <p class="progressHunt">151 / 151 - 100%</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:40%"></div>
                    </div>
                    <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center>                 
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Génération 5
                    </p>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                    <p class="progressHunt">151 / 151 - 100%</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:30%"></div>
                    </div>
                    <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center>                 
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Génération 6
                    </p>
                </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                    <p class="progressHunt">151 / 151 - 100%</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:20%"></div>
                    </div>
                    <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center>                 
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                    <p class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Génération 7
                    </p>
                </h5>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                    <p class="progressHunt">151 / 151 - 100%</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:10%"></div>
                    </div>
                    <center><a class="detailsHunt" href="#" title="Détails de la progression">Détails</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/parallax.js"></script>
<?php
include 'vues/footer.php';
?>
