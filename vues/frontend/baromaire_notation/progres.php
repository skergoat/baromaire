<?php 
/**
* Page : Suivre Progres
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
    <!-- title -->
    <div class="col-12"> <h4 class="mb-sm-4">Mes engagements par domaine</h4></div>
    <!-- cards -->
    <div class="row flex-wrap cards-container">
        <?php
        // loop >> see : Model/Cards
        foreach($cards->create() as $domaine) { ?>
        <div class="col-sm-3 col-card">
            <a href="/?cadre&quartier=2">
                <!-- <div class="card card-loop" style="height:180px;width:130px;"> -->
                <div class="card card-loop">
                    <!-- see : Model/Cards -->
                    <div class="reajust">
                        <img class="card-img-top" src="assets/img/engagements/<?= $domaine['image'] ?>" alt="Card image cap">
                    </div>
                    <div class="card-body p-0 pt-4">
                        <p class="card-text text-center black font-14"><?= $domaine['title'] ?></p>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
    <!-- pagination -->
    <!-- <div class="d-flex justify-content-end">
        <div><a href="#">...</a></div>
    </div> -->
</div>
<!-- row 2 -->
<div>
    <!-- title -->
    <div class="col-12"><h4 class="mb-sm-4">Mes engagements par quartier</h4></div>
    <!-- card  -->
    <div class="row flex-wrap cards-container">
        <?php
        // see : Model/Cards
        foreach($cards->quartier() as $quartier) { ?>
        <div class="col-sm-3 col-card">
            <a href="#">
                <div class="card card-loop">
                    <!-- see : Model/Cards -->
                    <div class="reajust">
                        <img class="card-img-top" src="assets/img/engagements/<?= $quartier['image'] ?>" alt="Card image cap">
                    </div>
                    <div class="card-body p-0 pt-4">
                        <p class="card-text text-center black font-14"><?= $quartier['title'] ?></p>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
    <!-- pagination -->
    <!-- <div class="d-flex justify-content-end d-sm-none">
        <div><a href="#">...</a></div>
    </div> -->
</div>
<!-- sidebar menu .active -->
<script>var child = 1;</script>
<?php 
$content = ob_get_clean(); 
require('vues/layout_notation.php');
?>
