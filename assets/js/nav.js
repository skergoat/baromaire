/***
 * nav mobiles 
 */

 // home 
$('#hamburger-button').on('click', function() {
    // open/close nav bottom 
    let height = $('#footer-home').height();
    $('.footer-responsive-nav').css('bottom', (height + 0)+'px');
    $('.footer-responsive-nav').toggleClass('d-none');
    $('#hamburger-button i').toggleClass('fa-bars').toggleClass('fa-times');
});

 // notation + admin 
 $('#hamburger-buttons').on('click', function() {
     // show popover when open responsive nav 
     if(!$('body').hasClass('hidden')) {
        $('[data-toggle="popover-2"]').popover('show');
    }
    else {
        $('[data-toggle="popover-2"]').popover('hide');
    } 
    // toggle nav
    $('body').toggleClass('hidden');
    $('#nav-responsive').toggleClass('d-none');
    $('#hamburger-buttons i').toggleClass('fa-bars').toggleClass('fa-times');
});
// hide popover when resize window 
$(window).on('resize', function() { 
    if($('body').hasClass('hidden')) {
        // toggle nav
        $('body').toggleClass('hidden');
        $('#nav-responsive').toggleClass('d-none');
        $('#hamburger-buttons i').toggleClass('fa-bars').toggleClass('fa-times');
    }
    // hide popover 
    $('[data-toggle="popover"]').popover('hide');
    $('[data-toggle="popover-2"]').popover('hide');
});
