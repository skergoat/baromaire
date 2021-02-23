<?php 
/**
* Page : Add Action
*/

$title = "Domaine d'action";

ob_start(); ?>

<script>
// sidebar active
var child = 3;
// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {
        $('[data-toggle="sidebar-3"').popover({
            placement:"right",
            html:true,
            title: "Domaine d'action",
            content:"<div class='p-3 black'>Les domaines d'action sont les thématiques de vos engagements</div>",
        }).popover('show');
    }
})
</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>