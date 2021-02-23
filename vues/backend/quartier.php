<?php 
/**
* Page : Add Action
*/
$title = "Quartiers";
ob_start(); ?>

<script>
// sidebar active 
var child = 4;
// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {
        $('[data-toggle="sidebar-4"').popover({
            placement:"right",
            html:true,
            title: "Quartier",
            content:"<div class='p-3 black'>Ajoutez les quartiers que vous pourrez relier à vos engagements</div>",
        }).popover('show');
    }
})
</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>