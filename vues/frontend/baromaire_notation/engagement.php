<?php 
/**
* Page : Nos engagements
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
    <h4 class="mb-4">Mes engagements par domaine</h4>
    <div class="row flex-wrap">
        <?php
        // loop >> see : Model/Cards
        foreach($cards->engagement() as $domaine) { ?>
        <div class="col-2 p-0 mr-4 mb-4">
            <a href="https://skergoat.com/baromaire/?cadre&quartier=1">
                <div class="card card-loop">
                    <!-- see : Model/Cards -->
                    <div class="reajust">
                        <img class="card-img-top" src="assets/img/engagements/<?= $domaine['image'] ?>" alt="Card image cap">
                    </div>
                    <?= $progress->cards(40) ?>
                    <div class="card-body p-0 pt-1">
                        <p class="card-text text-center black font-14"><?= $domaine['title'] ?></p>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
    <!-- pagination -->
    <div class="d-flex justify-content-end">
        <div><a href="#">...</a></div>
    </div>
</div>
<!-- sidebar menu .active -->
<script>var child = 3;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_notation.php'); ?>