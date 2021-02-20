<?php 
/**
* Page : Add Action
*/

// header title and subtitle
$title_baromaire = "Ville de Beaubourg";
$subtitle_baromaire = "Entreprendre et Réussir";
// change widget and percentage here
$widget = $progress->create(false, 30, 0, [0, 0 ,0]);

ob_start(); ?>
EDIT ACTION
<!-- sidebar menu .active -->
<script>var child = 6;</script>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_notation.php'); ?>