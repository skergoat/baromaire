<?php 
/**
* Page : Add Action
*/

$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Domaines d\'action</a></li>';

ob_start(); ?>

<!-- edit alert -->
<?php if(isset($_GET['reload'])) { $alert = "domaines enregistrés !"; } ?>

<div class="row pb-4 pt-lg-4 position-relative pt-3 pt-lg-0">
    <!-- ajouter -->    
    <a href="/?admin=domaine&reload" class="btn btn-primary position-absolute ajouter-domaine ml-0 ml-md-1 ml-lg-0">Enregistrer</a>
    <!-- title -->
    <div class="col-12"><h4 class="w-900 font-30 text-center m-0">Domaines d'Action</h4></div>
</div>

<!-- content -->
<div class="card-admin">
    <?php $i = 1;
    if(!empty($cards->create()) && !isset($_GET['create'])) {
        foreach($cards->create() as $domaine) { ?>
    <!-- accordeon -->
    <div class="mt-0 mt-md-2 back-transparent col-12 p-1 p-lg-0 mx-auto">
        <div class="row">
            <div class="accordeon accordeons col-1 d-flex justify-content-center align-items-center mr-2 back-white">
                <div class="w-900 font-18"><?= $domaine['id'] ?></div>
            </div>
            <div class="col p-0 accordeon accordeons back-white">
                <div class="row">
                    <div class="accordeon_body col-md-12 p-0 pb-2 pt-2">
                        <!-- title -->
                        <div class="row">
                            <!-- title -->
                            <div class="accordeon_body--title font-17 text-md-right col-12">
                                <?= $domaine['title'] ?>
                                <!-- button -->
                                <i class="fas fa-chevron-down icon-open-close pointer open-accordion font-18 ml-2 mr-2 mr-md-0 position-relative" style="top:2px;" data-url="<?= $domaine['id'] ?>" id="icon-<?= $domaine['id'] ?>"></i>
                            </div>
                        </div>
                        <!-- divider -->
                        <div class="divider_second d-none mb-2 mt-2 pl-3 pr-3" id="divider-<?= $domaine['id'] ?>"></div>
                        <!-- content -->
                        <div class="close-content accordeon_body--content font-15 primary text-justify" id="content-<?= $domaine['id'] ?>">
                            <div class="row p-2">
                                <!-- fields -->
                                <div class="form-group col-12 col-md-2 pl-0 pr-0">
                                    <label for="order" class="w-900">Ordre</label>
                                    <input type="number" class="form-control" min="0" max="10" id="order" placeholder="1" value="<?= $domaine['id'] ?>">
                                    <div class="invalid-feedback">Chiffre invalide</div>
                                </div>
                                <div class="form-group col-12 col-md-8 pl-0 pl-md-2 pr-0">
                                    <label for="engagement" class="w-900">Nom du Domaine</label>
                                    <input type="text" class="form-control" id="engagement" placeholder="" value="<?= $domaine['title'] ?>">
                                    <div class="invalid-feedback">
                                    Entrez au moins 2 lettres svp
                                    </div>
                                </div>
                                <div class="d-flex d-md-block justify-content-end form-group col-12 col-md-2 pl-0 pl-md-2 pr-0 mt-2 mt-md-0">
                                    <label for="engagement" class="w-900 d-none d-md-block">Supprimer</label>
                                    <button class="btn btn-danger white-link col-2 col-md-12 d-block"><i class="fas fa-trash"></i></button>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }  ?>
    <?php } else { ?>
    <div class="alert alert-warning col-12 text-center d-block mx-auto">Aucune action pour le moment</div>
    <?php }  ?>
    <!-- ajouter une action -->
    <?php if(isset($_GET['action'])) { ?>
    <div class="mt-2 back-transparent col-12 p-1 p-lg-0 mx-auto">
        <div class="row">
            <div class="accordeon accordeons col-1 d-flex justify-content-center align-items-center mr-2 back-white">
                <div class="w-900 font-18">6</div>
            </div>
            <div class="col p-0 accordeon accordeons back-white">
                <div class="row">
                    <div class="accordeon_body col-md-12 p-0 pb-2 pt-2">
                        <!-- title -->
                        <div class="row">
                            <!-- title -->
                            <div class="accordeon_body--title font-17 text-md-right col-12">
                                <!-- button -->
                                <i class="fas fa-chevron-up icon-open-close pointer open-accordion font-18 ml-2 mr-2 mr-md-0 position-relative" style="top:2px;" data-url="6" id="icon-6"></i>
                            </div>
                        </div>
                        <!-- divider -->
                        <div class="divider_second d-none mb-2 mt-2 pl-3 pr-3 d-block" id="divider-6"></div>
                        <!-- content -->
                        <div class="open-content accordeon_body--content font-15 primary text-justify" id="content-6">
                            <div class="row p-2">
                                <!-- fields -->
                                <div class="form-group col-12 col-md-2 pl-0 pr-0">
                                    <label for="order" class="w-900">Ordre</label>
                                    <input type="number" class="form-control" min="0" max="10" id="order" placeholder="1" value="6">
                                    <div class="invalid-feedback">Chiffre invalide</div>
                                </div>
                                <div class="form-group col-12 col-md-8 pl-0 pl-md-2 pr-0">
                                    <label for="engagement" class="w-900">Nom du Domaine</label>
                                    <input type="text" class="form-control" id="engagement" placeholder="" value="">
                                    <div class="invalid-feedback">
                                    Entrez au moins 2 lettres svp
                                    </div>
                                </div>
                                <div class="d-flex d-md-block justify-content-end form-group col-12 col-md-2 pl-0 pl-md-2 pr-0 mt-2 mt-md-0">
                                    <label for="engagement" class="w-900 d-none d-md-block">Supprimer</label>
                                    <button class="btn btn-danger white-link col-2 col-md-12 d-block"><i class="fas fa-trash"></i></button>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <a href="/?admin=domaine&action" class="btn btn-primary d-block col-5 col-md-2 mx-auto mt-5"><i class="fas fa-plus mr-2"></i> Ajouter</a>
</div>

<script>
// sidebar active
var child = 3;
// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {
        $('[data-toggle="sidebar-3"').popover({
            placement:"right",
            html:true,
            title: "Domaine d'action",
            content:"<div class='black'>Les domaines d'action sont les thématiques de vos engagements</div>",
        }).popover('show');
    }
})
</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>