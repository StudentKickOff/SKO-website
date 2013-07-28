$(document).ready(function() {
    $('#slider').simpleSlider({
        width: 630,
        height: 430,
        zIndex: 499, // z-index offset
        effect: 'horizontal',
        navigation: false, // show the previous and next buttons
        bullets: false, // show the bullet navigation
        title: false, // show the image title
    });
    
    $('.slider-previous-arrow').click(function(e){
        e.preventDefault();
        $('#slider').simpleSlider().previous();
    });
    
    $('.slider-next-arrow').click(function(e){ 
        e.preventDefault();
        $('#slider').simpleSlider().next();
    });

});
