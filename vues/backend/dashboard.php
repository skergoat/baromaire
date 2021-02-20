<?php 
/**
* Page : Admin Dashboard 
*/

// header title and subtitle
$title_baromaire = "Ville de Beaubourg";
$subtitle_baromaire = "Entreprendre et Réussir";
// change widget and percentage here
$widget = $progress->create(false, 0, 0, [0, 0 ,0]);

ob_start(); ?>

DASHBOARD

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_notation.php'); ?>