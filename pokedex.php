<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
?>
<div class="container bodyPage">
    <div class="row">
       
            
            <?php
            include 'controllers/showPokemonOnPokedex.php';
            ?>
        
    </div>
    
</div>
</div>
<?php include 'vues/footer.php' ?>