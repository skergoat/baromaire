<?php 
/**
* Page : Edit Profil
*/

$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Profil</a></li>';

$title = "Profil";

ob_start(); ?>


<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>