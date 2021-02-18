/**
 * accordeon 
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
