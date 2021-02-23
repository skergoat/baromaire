<?php 
/**
* Page : Edit Profil
*/

$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Profil</a></li>';

ob_start(); ?>

<div class="row flex-column-reverse flex-md-row pb-4 pt-lg-4">
    <!-- title -->
    <div class="col-12"><h4 class="w-900 font-30 text-center m-0 mr-lg-5">Profil</h4></div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>