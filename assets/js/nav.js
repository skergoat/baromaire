$('#hamburger-button').on('click', function() {
    let height = $('#footer-home').height();
    $('.footer-responsive-nav').css('bottom', (height + 0)+'px');
    $('.footer-responsive-nav').toggleClass('d-none');
});