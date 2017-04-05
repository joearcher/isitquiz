$(document).ready(function(){

    $('#randomise').on('click', function(){
        $('#result').fadeOut('slow', function(){
            $('#loader').fadeIn();
        });
        setTimeout(function(){
            $('#loader').fadeOut('slow', function(){
                $('#result').fadeIn();
            });      
        }, 3000);
    });
});