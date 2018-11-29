<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
?>
<div class="container pagePkm">
<button class="Show">Show</button>
<button class="Hide">Hide</button>
<div id="target">
    <button class="Hide">Hide</button>
    <div class="row">
        <div class="offset-5">
            J'aime les pommes.
        </div>
    </div>
</div>
</div>
<script>
    $('.Show').click(function() {
    $('#target').show(500);
    $('.Show').hide(0);
    $('.Hide').show(0);
});
$('.Hide').click(function() {
    $('#target').hide(500);
    $('.Show').show(0);
    $('.Hide').hide(0);
});
</script>
<?php include 'vues/footer.php' ?>

