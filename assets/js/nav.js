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
    $('body').toggleClass('hidden');
    $('#nav-responsive').toggleClass('d-none');
    $('#hamburger-buttons i').toggleClass('fa-bars').toggleClass('fa-times');
});
