/******************************* JQUERY **************************/


$(document).ready(function() {
    $("#log-in").click(function(event) {
        $('.sign-in-box').css('opacity', 0).slideDown(1000).animate({ opacity: 1 },{ queue: false, duration: 2000 });
        event.preventDefault();
        $(".transparency").show();

    });
 });