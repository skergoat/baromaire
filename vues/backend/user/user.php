<?php 
/**
* Page : Create user 
*/
$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>';

$title = "User";

ob_start(); ?>

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