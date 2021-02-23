<?php 
/**
* Page : Add Action
*/

ob_start(); ?>
ACTION
<!-- sidebar menu .active -->
<script>var child = 6;</script>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>