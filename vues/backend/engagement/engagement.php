<?php 
/**
* Page : Créer Premier engagement 
*/
$title = "Vos engagements";
ob_start(); ?>
    <!-- edit alert -->
    <?php if(isset($_GET['reload'])) { $alert = "engagement ajouté !"; } ?>

    <!-- title 1 -->
    <?php if(isset($_GET['reload'])) { ?>
    <!-- liste d'engagements -->
    <div class="mb-4 ">
        <?php 
        foreach($accordeon->create() as $accordeons) {
        ?>
        <!-- accordeon -->
        <div class="mt-2 back-transparent col-12 col-lg-10 mx-auto">
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
                                    <?= $accordeons['title'] ?>
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
                                        <img src="assets/img/engagements/<?= $accordeons['image'] ?>" alt="image engagements" class="d-block mx-auto" style="max-width:130px;"/>
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
                <!-- edit button -->
                <div  class="col-1 icon-edit-2 pt-1 pb-1">
                    <a href="/?admin=profil">
                        <div class="btn btn-primary" id="popover-desktop" data-toggle="popover" data-placement="bottom" title="Modifier un Elément" data-content="Modifiez directement les éléments en cliquant sur ce bouton">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
    <!-- title 2 -->
    <?php if(isset($_GET['reload'])) { ?>
    <h4 class="mb-4 mt-4 w-900 font-25 pt-3 pb-3 text-center">Ajouter un engagement</h4>
    <?php } ?>
    <!-- card -->
    <div class="card p-0 card-admin col-12 col-lg-8 mx-auto">
        <?php if(isset($_GET['sign'])) { ?>
        <!-- head -->
        <div class="card-header w-900 font-20"><span class="font-22 danger">Etape 3 :</span> Enregistrez vos premiers engagements</div>
        <?php } else { ?>
        <!-- head -->
        <div class="card-header w-900 font-20 danger"> Enregistrez vos engagements</div>
        <?php } ?>
        <!-- body -->
        <div class="card-body pt-4 pb-4">
        <!-- form -->
            <form id="form-sign">
                <div class="row">
                    <div class="col-12 p-0 mb-3">
                        <!-- row 1 -->
                        <div class="row">
                            <!-- order -->
                            <div class="form-group col-lg-2 pl-0">
                                <label for="order" class="w-900">Ordre</label>
                                <input type="number" class="form-control <?php if(isset($_GET['reload'])) { ?> is-invalid  <?php } ?>" min="0" max="10" id="order" placeholder="1">
                                <div class="invalid-feedback">Chiffre invalide</div>
                            </div>
                            <!-- engagement -->
                            <div class="form-group col-lg-7 pl-0 pr-0">
                                <label for="engagement" class="w-900">Engagement</label>
                                <input type="text" class="form-control <?php if(isset($_GET['reload'])) { ?> is-invalid  <?php } ?>" id="engagement" placeholder="Rénover les arrêts de bus, etc.">
                                <div class="invalid-feedback">
                                Entrez au moins 2 lettres svp
                                </div>
                            </div>
                            <div class="form-group col-lg-3 pr-0">
                                <!-- realisation -->
                                <label for="realisation" class="w-900">Réalisation</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="input-percent" placeholder="0" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- row 2 -->
                    <div class="col-12 p-0 mb-3">
                        <div class="row">
                            <!-- photo -->
                            <div class="form-group col-lg-4 pl-0">
                                <label for="order" class="w-900">Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file1">
                                        <label class="custom-file-label" for="file1">
                                        fichier.jpg
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- domaine -->
                            <div class="form-group col-lg-4 pl-0 pr-0">
                                <label for="exampleFormControlSelect1" class="w-900">Domaine d'action</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                        <option>_</option>
                                    <?php if(isset($_GET['reload'])) { ?>
                                    <?php foreach($cards->create() as $domaine) { ?>
                                        <option><?= $domaine['title'] ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <!-- quartier -->
                            <div class="form-group col-lg-4 pr-0">
                                <label for="exampleFormControlSelect1" class="w-900">Quartier</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                        <option>_</option>
                                    <?php if(isset($_GET['reload'])) { ?>
                                    <?php foreach($cards->quartier() as $quartier) { ?>
                                        <option><?= $quartier['title'] ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                        </div>
                    </div>     
                </div>
                <!-- textarea -->
                <div class="col-12 p-0 mb-4">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="w-900">Description</label>
                        <textarea class="form-control <?php if(isset($_GET['reload'])) { ?> is-invalid  <?php } ?>" id="exampleFormControlTextarea1" rows="5"></textarea>
                        <div class="invalid-feedback">
                        Entrez au moins 2 lettres svp
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <div class="row justify-content-lg-center align-items-sm-center">
                        <button class="btn btn-primary col-md-7 mb-md-1" id="submit-1"><i class="fas fa-redo-alt mr-1"></i> Enregistrer et ajouter un engagement</button>
                        <!-- add this button only when there are already "domaines d'action" -->
                        <?php if(isset($_GET['reload'])) { ?>
                        <button class="btn btn-primary col-md-7 mb-md-1" id="submit-2"><i class="fas fa-plus mr-1"></i> Ajouter une action</button>
                        <?php } else { ?>
                        <button class="btn btn-primary col-md-7 mb-md-1" id="submit-2-disabled" data-toggle="popover-3" data-placement="top"><i class="fas fa-plus mr-1"></i> Ajouter une action</button>
                        <?php } ?>
                        <button class="btn btn-primary col-md-7 mb-md-1" id="submit-3"><i class="fas fa-directions mr-1"></i> Enregistrer et quitter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<!-- reirect provisoire -->
<script>
  $('#submit-1').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=engagement&reload"});
  <?php if(isset($_GET['reload'])) { ?>
  $('#submit-2').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=action"});
  <?php } ?>
  $('#submit-3').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=dashboard"});
</script> 
<!-- sidebar menu .active -->
<script>var child = 6;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>