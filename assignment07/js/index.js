$(document).ready(function () {
    // pragma
    "use strict";

    var ghost_show = 0;

    $("#hideme").click(function() {
        $(this).hide();
    })

    $( "#car" ).click(function() {
      $( "#car" ).animate({
        left: "600px",
      }, 1000, function() {
        // Animation complete.
      });
    });

    $( "#text" ).click(function() {
    // variables
        if (ghost_show==0) {
            $("#ghost").fadeIn(2000);
            ghost_show = 1;
        } else {
            $("#ghost").fadeOut(2000);
            ghost_show = 0;
        }
        
    });

});

function setFallTheme() {
    $("#nav").css({"background-color": "#ff0000"});
    $("#body").css({"background-color": "#ffff00"});

}

function setSpringTheme() {
    $("#nav").css({"background-color": "#1C4905"});
    $("#body").css({"background-color": "#D8ECC3"});
}
