// JavaScript Document

$('document').ready(function(e) {



    var div = $('#mainNav_mobiel');
    var start = $(div).offset().top;

    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(div).css('position', ((p) > start) ? 'fixed' : 'absolute');
        $(div).css('top', ((p) > start) ? '0' : '');
        $(div).css('left', ((p) > start) ? '0' : '');
        // $(div).css('margin-left', ((p) > start) ? '-450px' : '');

    });
    


});



function zoeken(){
    console.log("zoek dan!");
    $(".zoek").css("display", "none");
    $(".fZoek").css("display", "block");


};
