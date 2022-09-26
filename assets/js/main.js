$(document).ready(function(){

    $(".bar").click(function(e){
        e.preventDefault()
        $(".nav-toggle").slideToggle(500);
    });


})