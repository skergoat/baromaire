// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {

         /****
         * Engagement
         */
        // popover pencil 
        $('[data-toggle="engagement-1"]').popover({
            placement:"top",
            html:true,
            title: "Modifications",
            content:"Cliquez ici pour modifier votre engagement",
        }).popover('show');

        // popover sidebar
        $('[data-toggle="sidebar-2"]').popover({
            placement:"bottom",
            html:true,
            title: "Engagements",
            content:"<div class='p-3 black'>Indiquez ici vos engagement pour la commune</div>",
        }).popover('show');

    }
})