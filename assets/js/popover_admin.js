// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {

         /****
         * Engagement
         */
        $('[data-toggle="'+popover+'"]').popover({
            placement:"bottom",
            html:true,
            title: "Engagements",
            content:"<div class='p-3 black'>Indiquez ici vos engagement pour la commune</div>",
        }).popover('show');

    }
})