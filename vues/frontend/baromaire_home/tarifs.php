<?php 
/**
* Page : Principes
*/ 
// content
ob_start(); ?>
<div class="text-center mb-5 mt-4">
    <div class="row justify-content-between">
        <div class="col-12 col-lg-6 pr-0 pl-0 mb-5 mb-0">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0 pr-0 pl-0 pr-md-3">
                    <div class="card card-principes card-principes-prices shadow">
                        <div class="card-body pb-5 pt-5">
                            <div class="pt-3 mb-5 position-relative">
                                <img src="assets/img/image_28.jpg" alt="" class="position-absolute logo-tarifs"> 
                                <span class="font-45 text-danger w-900">0 &euro;</span>
                            </div>
                            <div>
                                <div class="content font-25">
                                   Pour toutes les communes jusqu'à  <span class="text-info w-900">5 engagements</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pr-0 pl-0 pr-md-3 pl-md-3">
                    <div class="card card-principes card-principes-prices shadow">
                        <div class="card-body pb-5 pt-5">
                            <div class="pt-3 mb-5">
                                <span class="font-45 text-danger w-900">500 &euro;</span><span class="font-25 text-danger"> /an</span>
                            </div>
                            <div>
                                <div class="content font-25">
                                   Pour toutes les communes jusqu'à  <span class="text-info w-900">5000</span> habitants
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 pr-0 pl-0 ">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0 pr-0 pl-0 pl-md-3 pr-md-3">
                    <div class="card card-principes card-principes-prices shadow">
                        <div class="card-body pb-5 pt-5">
                            <div class="pt-3 mb-5">
                                <span class="font-45 text-danger w-900">1500 &euro;</span><span class="font-25 text-danger"> /an</span>
                            </div>
                            <div>
                                <div class="content font-25">
                                   Pour toutes les communes jusqu'à  <span class="text-info w-900">50 000</span> habitants
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-5 mb-md-0 pr-0 pl-0 pl-md-3 pr-0">
                    <div class="card card-principes card-principes-prices shadow">
                        <div class="card-body pb-5 pt-5">
                            <div class="pt-3 mb-5">
                                <span class="font-45 text-danger w-900">3000 &euro;</span><span class="font-25 text-danger"> /an</span>
                            </div>
                            <div>
                                <div class="content font-25">
                                   Pour toutes les communes au-delà de <span class="text-info w-900">50 000</span> habitants
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