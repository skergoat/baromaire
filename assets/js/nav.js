/***
 * nav mobiles 
 */

/****
 * HOME
 */
$('#hamburger-button').on('click', function() {
    // open/close nav bottom 
    let height = $('#footer-home').height();
    $('.footer-responsive-nav').css('bottom', (height - 7)+'px');
    $('.footer-responsive-nav').toggleClass('d-none');
    $('#hamburger-button i').toggleClass('fa-bars').toggleClass('fa-times');
});

/****
 * NOTATION
 */ 
 $('#hamburger-buttons').on('click', function(){
     // show popover when open responsive nav 
     if(!$(this).hasClass('hidden')) {
        $('[data-toggle="popover-2"]').popover('show');
    }
    else {
        $('[data-toggle="popover-2"]').popover('hide');
    } 
    // toggle nav
    $(this).toggleClass('hidden');
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

/****
 * ADMIN
 */ 
$('#hamburger-buttons-admin').on('click', function() {
    $('#sidebar-admin').toggleClass('d-none');
});

$('.overlay').on('click', function() {
    $('#sidebar-admin').toggleClass('d-none');
});