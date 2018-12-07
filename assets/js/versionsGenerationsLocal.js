$(function() {
    $(".linkPagePkm").click(function() {
        var generation = $(this).attr('nbGen');
        $.post('/controllers/versionGenerationQuery.php',
                {
                    generationLocal: generation
                }, // Un script PHP que l'on va créer juste après
                function(generationLocal) {
                    $.each(generationLocal, function(searchArraypos, getOneLocal) {
                        $(".bodyTable").append('<tr><td id = "bodyTableLocal">' + getOneLocal.version +  '</td><td></td></tr>');
                    });
                },
                'json'
                );
        $(".bodyTable").empty();
    });
});