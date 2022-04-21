$(document).ready(function(){
    $('.navbtn').click(function(){
        $(this).parent().find(".navigationbar").fadeToggle();
    });
});