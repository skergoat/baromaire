/***
 * nav mobiles 
 */

/****
 * HOME
 */
$('#hamburger-button').on('click', function() {
    // open/close nav bottom 
    let height = $('#footer-home').height();
    $('.footer-responsive-nav').css('bottom', (height + 0)+'px');
    $('.footer-responsive-nav').toggleClass('d-none');
    $('#hamburger-button i').toggleClass('fa-bars').toggleClass('fa-times');
});

/****
 * NOTATION
 */ 
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

/****
 * ADMIN
 */
var width = $(window).width();
//  open / close sidebar left desktop
$('#hamburger-buttons-admin').on('click', function() {
    // desktop 
    if(width > 1150) {
        // if bodfy is closed, then open 
        if(!$('body').hasClass('hidden')) {
            $('body').toggleClass('hidden');
            $('.sidebar-left').css({'position': 'absolute', 'top':'0', 'z-index':'9999', 'left':'-100%'});
            $('.main-content ').toggleClass('col-lg-12');
        }
        // if body is open, then close 
        else {
            $('body').toggleClass('hidden');
            $('.sidebar-left').css({'left':'0'}).css({'position':'relative'});
            $('.main-content ').toggleClass('col-lg-12');
        }
    }
    // open on mobile 
    if(width <= 1150) {
        if(!$('body').hasClass('hidden')) {
            $('.overlay').toggleClass('d-block');
            $('body').addClass('hidden');
            $('.sidebar-left').css({'left':'0%'});
        }
    }
});

$('.overlay').on('click', function() {
    // mobile 
    if($('body').hasClass('hidden')) {
        if(width < 1150) {
            $('body').toggleClass('hidden');
            $('.sidebar-left').css({'left':'-100%'});
            $(this).toggleClass('d-block');
        }
    }
});

// open / close sidebar left mobile 
// $(window).on('resize', function() { 
//     var width2 = $(window).width();
//     if(width2 < 1150) {
//         if(!$('body').hasClass('hidden')) {
//             $('.sidebar-left').css({'left':'-100%'});
//         }
//         if($('body').hasClass('hidden')) {
//             $('body').toggleClass('hidden');
//             $('.sidebar-left').css({'left':'0%'});
//         }
//     }
// });