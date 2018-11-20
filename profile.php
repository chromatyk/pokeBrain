<?php
include 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/safaryFriend.php';
include_once 'models/hunts.php';
include_once 'controllers/usersInfos.php';
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
<div class="row">
    <div class="col-lg-12 bannerParallax"></div>
</div>
<div class="safariPark offset-lg-3 col-lg-8">
    <div class="col-sm-offset-5 col-md-offset-2 col-lg-offset-4">
        <p id="caProfil">Code Ami : <?= $userConnected->friendCode; ?></p>
    </div>
    <?php
    if ($safaryFriend) {
        ?>
        <div id = "safariHub">
            <div class = "col-xs-10 col-sm-11 col-md-9 col-lg-10">
                <p id = "friendPark" >Safari Ami <img id = "typePark" src = "/assets/spriteSafari/<?= $safaryFriend->type ?>.png"/></p>
            </div>
            <div class = "col-xs-offset-2 col-xs-10 col-sm-offset-0 col-sm-10 col-md-offset-0 col-md-9 col-lg-offset-0 col-lg-10">
                <span id = "pkmPark">
                    <img src = "/assets/spriteSafari/<?= $safaryFriend->firstPokemon ?>.png"/>
                    <img src = "/assets/spriteSafari/<?= $safaryFriend->secondPokemon ?>.png"/>
                    <img src = "/assets/spriteSafari/<?= $safaryFriend->thirdPokemon ?>.png"/>
                </span>
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
<div class="gen1 offset-lg-3 col-lg-8">

    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item #2
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'vues/footer.php';
?>
