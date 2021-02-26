<?php 
/**
* Page : Notre démarche
*/

// header title and subtitle
$title_baromaire = "Ville de Beaubourg";
$subtitle_baromaire = "Entreprendre et Réussir";
// change widget and percentage here
$widget = $progress->create(false, 100, 30, [6, 3 ,2]);

// content
ob_start(); ?>
<!-- row 1 -->
<div class="mb-4">
    <h4 class="mb-4">Me contacter</h4>
    <p class="mb-4 text-secondary">Utilisez ce formulaire pour communiquer avec votre Maire</p>
    <form>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1" class="w-900">Nom et prénom</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlInput1" class="w-900">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1" class="w-900">Votre message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
        <button class="btn btn-success">Envoyer</button>
    </form>
</div>
<!-- sidebar menu .active -->
<script>var child = 5;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_notation.php'); ?>