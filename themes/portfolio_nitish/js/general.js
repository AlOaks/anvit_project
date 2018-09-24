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


    // DESIGN SLIDER functions

   $(".slider-btn-lft").click(function() {
       var currentLeft = $(".design-slider").scrollLeft();
       var slideWidth = $(".design-slide").width();

       $(".design-slider").scrollLeft((currentLeft + slideWidth));
   });

   $(".slider-btn-right").click(function() {
    var currentRight = $(".design-slider").scrollLeft();
    var slideWidth = $(".design-slide").width();

    $(".design-slider").scrollLeft((currentRight - slideWidth));
    });

    // PHOTOGRAPHY SLIDER functions

    $(".photoslider-btn-lft").click(function() {
        var currentLeft = $(".photos-container").scrollLeft();
        var slideWidth = $(".photo-image").width();
 
        $(".photos-container").scrollLeft((currentLeft + slideWidth));
    });

    $(".photoslider-btn-right").click(function() {
        var currentRight = $(".photos-container").scrollLeft();
        var slideWidth = $(".photo-image").width();
    
        $(".photos-container").scrollLeft((currentRight - slideWidth));
    });

    // STORIES SLIDER

    

    $(".stories-range").change(function(){

        var range = $(".stories-range").val();
        var currentPosition = $(".stories-container").scrollLeft();

        var scrollW = $(".stories-container")[0].scrollWidth; 
        
        var percentage = scrollW*(range / 100);

        $(".stories-container").scrollLeft(percentage);
        
        console.log(range);
        console.log(scrollW);

    });


   




    
})(jQuery);