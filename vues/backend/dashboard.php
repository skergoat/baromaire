<?php 
/**
* Page : Admin Dashboard 
*/

ob_start(); ?>

DASHBOARD

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>