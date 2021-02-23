<?php 
/**
* Page : Create user 
*/
$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>';
ob_start(); ?>

<div class="row flex-column-reverse flex-md-row pb-4 pt-lg-4">
    <!-- title -->
    <div class="col-12"><h4 class="w-900 font-30 text-center m-0 mr-lg-5">Ajouter un utilisateur</h4></div>
</div>

<script>
// sidebar active 
var child = 5;
// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {
        $('[data-toggle="sidebar-5"').popover({
            placement:"bottom",
            html:true,
            title: "Utilisateur",
            content:"<div class='black'>Ajoutez un utilisateur et attribuez-lui un rôle</div>",
        }).popover('show');
    }
})
</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>