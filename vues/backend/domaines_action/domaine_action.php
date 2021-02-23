<?php 
/**
* Page : Add Action
*/

$title = "Domaine d'action";

ob_start(); ?>

<script>var child = 3;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>