$(window).load(function() {

    // Homepageslider
    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: false             //Boolean: Create navigation for previous/next navigation? (true/false)
    });


    if($('#slider').find('.slides .slider-item').length > 1) {
      $('.slider-previous-arrow').click(function(e) {
          e.preventDefault();
          $('#slider').flexslider('prev');
      });

      $('.slider-next-arrow').click(function(e) {
          e.preventDefault();
          $('#slider').flexslider('next');
      });
    } else {
      $('.slider-previous-arrow').hide();
      $('.slider-next-arrow').hide();
    }

    // Partnerslider
    $('#partner-slider').flexslider({
        animation: "fade",
        direction: "horizontal",
        controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
        randomize: true
    });

});
