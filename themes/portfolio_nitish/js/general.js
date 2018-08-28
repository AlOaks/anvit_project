(function($){


    // MENU FUNCTIONS

    $(".menu-menu-1-container").hide();
    $(".fa-times").hide();
    $(".black-overlay").hide();

    $(".menu-toggle").click(function(e){
        e.preventDefault();
        $(".menu-menu-1-container").show("slow");
        $(".fa-times").show("slow"); 
        $(".menu-toggle").hide();
        $(".black-overlay").fadeIn("slow");
    });

    $(".menu-close").click(function(e){
        e.preventDefault();

        $(".menu-menu-1-container").hide();
        $(".fa-times").hide(); 

        $(".menu-toggle").show();
        $(".black-overlay").fadeOut("slow");

    });

    // SLIDERS 

    $(".photo-ol").hide();
    $(".ux-ol").hide();


    $(".ux-button").click(function(e){
        e.preventDefault();
        $( ".ux-ol" ).animate({
            width: [ "toggle"]});

        if($(".photo-ol").is(":visible")) {
            $( ".photo-ol" ).animate({
                width: [ "toggle"]});
        }
    });

    
    $(".photo-button").click(function(e){
        e.preventDefault();
        $( ".photo-ol" ).animate({
            width: [ "toggle"]});

        if($(".ux-ol").is(":visible")) {
            $( ".ux-ol" ).animate({
                width: [ "toggle"]});
        }
    });


    // SLIDER functions

    $(function() {
        $('.center').slick({
            centerMode: true,
            slidesToShow: 1,
          });
    });




    
})(jQuery);