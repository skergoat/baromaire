<?php 
/**
* Page : Créer Votre Baromaire
*/ 
// content
ob_start(); ?>
HOME
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_home.php'); ?>