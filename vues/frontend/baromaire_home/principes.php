<?php 
/**
* Page : Principes
*/ 
// content
ob_start(); ?>
<div class="container-baromaire container-baromaire-body text-center mb-5 mt-5">
    <div class="row justify-content-between">
        <div class="col-12 col-lg-6 pr-lg-0 mb-5 mb-lg-0">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0 pr-3 pl-3">
                    <div class="card card-principes shadow">
                        <div class="card-body pb-5 pt-4">
                            <div class="pt-3 mb-4">
                                <img src="assets/img/principes/principes-3.jpg" alt="" style="max-width:150px;"/>
                            </div>
                            <div>
                                <div class="w-900 font-25 mb-3">LE BAROMAIRE</div>
                                <div class="content">
                                    est un outil permettant de presenter 
                                    les engagements du Maire pour la realisation 
                                    de projets concrets et mesurables prandant
                                    la duree de son mandat.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pr-3 pl-3">
                    <div class="card card-principes shadow">
                        <div class="card-body pb-5 pt-4">
                            <div class="pt-3 mb-4">
                                <img src="assets/img/principes/principes-2.jpg" alt="" style="max-width:150px;"/>
                            </div>
                            <div>
                                <div class="w-900 font-25 mb-3">LE BAROMAIRE</div>
                                <div class="content">
                                    classe les projets par thématique et par localisation,
                                    permettant ainsi aux administrés d'accéder à une vue 
                                    synthétique du progrès réalisé pendant la durée du mandat.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 pr-lg-0">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0 pl-3">
                    <div class="card card-principes shadow">
                        <div class="card-body pb-5 pt-4">
                            <div class="pt-3 mb-4">
                                <img src="assets/img/principes/principes-1.jpg" alt="" style="max-width:150px;"/>
                            </div>
                            <div>
                                <div class="w-900 font-25 mb-3">LE BAROMAIRE</div>
                                <div class="content">
                                    affiche l'état d'avancement de chaque projet, 
                                    que ce soit pour le nombre de places en crèche,
                                    les kilomètres de piste cyclable ou tout autre projet 
                                    aux résultats mesurables.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-5 mb-md-0 pl-3">
                    <div class="card card-principes shadow">
                        <div class="card-body pb-5 pt-4">
                            <div class="pt-3 mb-4">
                                <img src="assets/img/principes/principes-4.jpg" alt="" style="max-width:150px;"/>
                            </div>
                            <div>
                                <div class="w-900 font-25 mb-3">LE BAROMAIRE</div>
                                <div class="content">
                                    peut s'intégrer facilement sur le site web de la commune 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_home.php'); ?>