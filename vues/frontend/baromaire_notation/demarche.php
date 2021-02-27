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
    <h4 class="mb-4">Notre démarche</h4>
    <div class="row flex-sm-column flex-lg-row pr-3 pr-lg-0 pl-3 pl-lg-0">
        <div class="col-sm-12 col-lg-6 p-0 mb-4 mb-lg-0">
            <img src="assets/img/image_29.jpg" alt="Team">
        </div>
        <div class="col-sm-12 col-lg-6 pl-0 pl-lg-3 pr-0">
            <p class="primary font-16 text-justify mb-2" style="line-height:1.7rem">Vous le savez, à Beaubourg, nous innovons sans cesse pour transformer notre ville et la moderniser. Cela ne se limite pas uniquement à des projets ! Aujourd'hui, grace au Baromaire, c'est une manière plus transparente de vous informer que je vous propose. </p>
            <p class="primary font-16 text-justify mb-2" style="line-height:1.7rem">En visitant régulièrement notre Baromaire, vous pourrez suivre en temps réel la mise en oeuvre de tous les engagements que nous avons pris envers vous pour ces 6 prochaines années. Vous pourrez ainsi, pour chaque projet structurant de notre ville, suivre l'avancée des travaux et juger de la performance de votre équipe municipale.</p>
            <div class="row">
                <div class="col-4 offset-7 primary p-0">
                    <p class="text-center mb-2">Le Maire,</p>
                    <p class="text-center mb-2">Robert Dupont</p>
                    <img src="assets/img/image_27.jpg" alt="Team" class="d-block mx-auto" style="max-width:120px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sidebar menu .active -->
<script>var child = 2;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_notation.php'); ?>