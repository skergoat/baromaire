<?php 
/**
* Page : Créer Premier engagement 
*/
$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Engagements</a></li>';

ob_start(); ?>
    <!-- edit alert -->
    <?php if(isset($_GET['delete'])) { $alert = "Utilisateur supprimé !"; } ?>
    <?php if(isset($_GET['reload'])) { $alert = "Modifications enregistrées !"; } ?>
    <?php if(isset($_GET['create'])) { $alert = "Utilisateur ajouté !"; } ?>

    <div class="col-12 p-0 pb-2 pb-md-4 pt-lg-4 position-relative pt-5 pt-lg-0">
        <!-- ajouter -->    
        <a href="/?admin=edit_engagement&create" class="btn btn-primary position-absolute ajouter-domaine ml-0 ml-md-1 ml-lg-0">Ajouter</a>
        <!-- title -->
        <div class="col-12"><h4 class="w-900 font-30 text-center m-0">Vos engagements</h4></div>
    </div>

    <!-- liste d'engagements -->
    <div class="mb-4">
        <?php 
        if(!empty($accordeon->create())) {
            foreach($accordeon->create() as $accordeons) { ?>
        <!-- accordeon -->
        <div class="mt-0 mt-md-2 back-transparent col-12 p-1 p-lg-0 mx-auto">
            <div class="row">
                <div class="accordeon accordeons col-1 d-flex justify-content-center align-items-center mr-2 back-white">
                    <div class="w-900 font-18"><?= $accordeons['id'] ?></div>
                </div>
                <div class="col p-0 accordeon accordeons back-white">
                    <div class="row">
                        <div class="accordeon_body col-md-12 p-0 pb-2 pt-2">
                            <!-- title -->
                            <div class="row">
                                <!-- badges -->
                                <div class="col-md-4 p-0 text-md-right badges d-flex justify-content-start hidden">
                                    <?php foreach($accordeons['badges'] as $badges) { ?>
                                    <div><span class="badge badge-secondary"><?= $badges ?></span></div>
                                    <?php } ?>
                                </div>
                                <!-- title -->
                                <div class="accordeon_body--title font-17 text-right col-md-8">
                                    <a href='/?admin=edit_engagement' class="underline" title="modifier"><?= $accordeons['title'] ?></a>
                                    <!-- button -->
                                    <i class="fas fa-chevron-down icon-open-close pointer open-accordion font-18 ml-2 position-relative" style="top:2px;" data-url="<?= $accordeons['id'] ?>" id="icon-<?= $accordeons['id'] ?>"></i>
                                </div>
                            </div>
                            <!-- divider -->
                            <div class="divider_second d-none mb-2 mt-2 pl-3 pr-3" id="divider-<?= $accordeons['id'] ?>"></div>
                            <!-- content -->
                            <div class="close-content accordeon_body--content font-15 primary text-justify" id="content-<?= $accordeons['id'] ?>">
                                <div class="row p-2">
                                    <!-- image -->
                                    <div class="col-md-3 pt-2">
                                        <img src="assets/img/<?= $accordeons['image'] ?>" alt="image engagements" class="d-block mx-auto" style="max-width:130px;"/>
                                    </div>
                                    <!-- content -->
                                    <div class="content col-md-9">
                                        <?php echo $accordeons['content']; ?>
                                        <!-- badges -->
                                        <div class="col-md-12 p-0 text-md-right badge d-md-none d-flex justify-content-start">
                                            <?php foreach($accordeons['badges'] as $badges) { ?>
                                            <div><span class="badge badge-secondary ml-2"><?= $badges ?></span></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } 
        } else { ?>
        <div class="alert alert-warning col-12 text-center d-block mx-auto">Aucun engagement pour le moment</div>
        <?php } ?>
    </div>
<script>
// sidebar active 
var child = 2;
// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {
        $('[data-toggle="sidebar-2"').popover({
            placement:"right",
            html:true,
            title: "Engagements",
            content:"<div class='black'>Indiquez ici vos engagement pour la commune</div>",
        }).popover('show');
    }
})
</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>