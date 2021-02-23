<?php 
/**
* Page : Add Action
*/

$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Domaines d\'action</a></li>';

ob_start(); ?>

<div class="row flex-column-reverse flex-md-row pb-4 pt-lg-4">
    <!-- title -->
    <div class="col-12"><h4 class="w-900 font-30 text-center m-0 mr-lg-5">Domaines d'action</h4></div>
</div>

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
            content:"<div class='black'>Les domaines d'action sont les thématiques de vos engagements</div>",
        }).popover('show');
    }
})
</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>