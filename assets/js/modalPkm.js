$(function() {
    $("#boxGlobalPkm").click(function() {
        $.post(
                '/controllers/infosModalController.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $('#targetPkm').attr("src", "/assets/classicGif/" + idPkm + ".png");
                    $('#targetPkmShiny').attr("src", "/assets/shinyGif/" + idPkm + ".png");
                    $('#nameWanted').attr("href", "/localisations/" + idPkm);
                    $('#nameWanted').html(idPkm);
                },
                'text'
                );
    });
});