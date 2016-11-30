jQuery(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader1').delay(1).fadeOut('fast'); // will fade out the white DIV that covers the website.
    $('body').delay(1).css({
        'overflow': 'visible'
    });
})
