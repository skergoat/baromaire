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
                    <div class="card card-principes card-principes-prices shadow">
                        <div class="card-body pb-5 pt-5">
                            <div class="pt-3 mb-5">
                                <span class="font-45">0 &euro;</span>
                            </div>
                            <div>
                                <div class="content font-25">
                                   Pour toutes les communes jusqu'à 5 engagements
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pr-3 pl-3">
                    <div class="card card-principes card-principes-prices shadow">
                        <div class="card-body pb-5 pt-5">
                            <div class="pt-3 mb-5">
                                <span class="font-45">500 &euro;</span> <span class="font-25"> /an</span>
                            </div>
                            <div>
                                <div class="content font-25">
                                   Pour toutes les communes jusqu'à 5000 habitants
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 pl-lg-0">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0 pl-3">
                    <div class="card card-principes card-principes-prices shadow">
                        <div class="card-body pb-5 pt-5">
                            <div class="pt-3 mb-5">
                                <span class="font-45">1500 &euro; </span> <span class="font-25"> /an</span>
                            </div>
                            <div>
                                <div class="content font-25">
                                   Pour toutes les communes jusqu'à 50 000 habitants
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-5 mb-md-0 pl-3">
                    <div class="card card-principes card-principes-prices shadow">
                        <div class="card-body pb-5 pt-5">
                            <div class="pt-3 mb-5">
                                <span class="font-45">3000 &euro;</span> <span class="font-25"> /an</span>
                            </div>
                            <div>
                                <div class="content font-25">
                                   Pour toutes les communes au-delà de 50 000 habitants
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