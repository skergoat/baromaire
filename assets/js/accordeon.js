/**
 * accordeon FRONT 
 */
$('.watch').on('click', function() { 
    let data = $(this).attr('data-url'); // description id 

    if(!$(this).hasClass('opened')) { 
        // open description 
        $('#content-'+data).css('display', 'none');
        // hide content 
        $('#description-'+data).css('height', '100%');
        // close all other descriptions 
        $('.description').not('#description-'+data).css('height', '0px'); // close 
        $('.content').not('#content-'+data).css('display', 'block'); // show content 
        $('.watch').not(this).html('<i class="fas fa-plus"></i>'); // toggle icon 
        $('.watch').not(this).each(function() { // toggle class "opened"
            if($(this).hasClass('opened')) {
                $(this).removeClass('opened');
            }
        })
        // load progress bar on "Dans votre quartier" page 
        if($(this).hasClass('watch-quartier')) {
            $('#widget-load').load('../../vues/frontend/ajax_load/quartier.php', function() {
                // display title into widget
                var title = $('#accordeon-title-'+data).text();
                $('#title-load').text(title);
            });
        }
        // toggle icon 
        $(this).html('<i class="fas fa-minus"></i>');
    }
    else {
        // reload widget 
        $('#widget-load').load('../../vues/frontend/ajax_load/widget.php');
        // show content 
        $('#content-'+data).css('display', 'block');
        // lose description 
        $('#description-'+data).css('height', '0px');
        // toggle icon 
        $(this).html('<i class="fas fa-plus"></i>');
    }
    // open /close class
    $(this).toggleClass('opened');
});

/**
 * accordeon ADMIN  
 */
$('.open-accordion').on('click', function(e) {  
    var data = $(this).attr('data-url');
    // if(!$(this).hasClass('opened')) { 
        
    // } else {

    // }
    // open content 
    $('#content-'+data).toggleClass('open-content').toggleClass('close-content');
    // close other content 
    $('.accordeon_body--content').not('#content-'+data).removeClass('open-content').addClass('close-content');
    $('.icon-open-close').not('#icon-'+data).each(function() {
        $(this).removeClass('fa-chevron-up').addClass('fa-chevron-down');
    });
    // toggle chevron down 
    $('#icon-'+data).toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    // toggle button class
    // $(this).toggleClass('opened');
});