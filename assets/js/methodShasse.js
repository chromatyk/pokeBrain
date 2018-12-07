$(function() {
    $("#versionSelected").change(function() {
        var version = $('#versionSelected').val();
        $.post('/controllers/methodHuntScript.php',
                {
                    methods: version
                }, // Un script PHP que l'on va créer juste après
                function(methods) {
                    $.each(methods, function(searchArraypos, needMethods) {
                        $('#allMethodsByVersion').append('<option value="' + needMethods.id + '">' + needMethods.methode + '</option>');
                    });
                },
                'json'
                );
        $('#allMethodsByVersion').empty();
    });
});

