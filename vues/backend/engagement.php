<?php 
/**
* Page : Créer Premier engagement 
*/

// header title and subtitle
$title_baromaire = "Ville de Beaubourg";
$subtitle_baromaire = "Entreprendre et Réussir";
// change widget and percentage here
$widget = $progress->create(false, 30, 0, [0, 0 ,0]);

ob_start(); ?>

<div class="mb-4">
    <?php if(isset($_GET['reload'])) { ?>
    <div class="alert alert-success" id="alert-remove" role="alert"> 
    Engagement Ajouté !
    </div>
    <?php } ?>
    <!-- title 1 -->
    <h4 class="mb-4">Vos engagements</h4>
    <?php if(isset($_GET['reload'])) { ?>
    <!-- liste d'engagements -->
    <div class="mb-4 ">
        <?php 
        foreach($accordeon->create() as $accordeons) {
        ?>
        <!-- accordeon -->
        <div class="mt-2" style="background:transparent;">
            <div class="row">
                <div class="accordeon accordeons col-1 d-flex justify-content-center align-items-center mr-2 back-white">
                    <div class="w-900 font-18"><?= $accordeons['id'] ?></div>
                </div>
                <div class="col p-0 accordeon accordeons back-white">
                    <div class="row">
                        <!-- image -->
                        <!-- <div class="accordeon_image col-md-3 p-0 pl-md-3 d-flex align-items-center justify-content-center position-relative">
                            <div>
                                <img src="assets/img/engagements/<?= $accordeons['image'] ?>" alt="image engagements" style="max-width:130px;"/>
                            </div>
                        </div> -->
                        <!-- image -->
                        <div class="accordeon_body col-md-12 p-0 pb-2 pt-2">
                            <!-- title -->
                            <div class="row">
                                <!-- badges -->
                                <div class="col-md-3 p-0 text-md-right badges d-flex justify-content-start">
                                    <?php foreach($accordeons['badges'] as $badges) { ?>
                                    <div><span class="badge badge-secondary"><?= $badges ?></span></div>
                                    <?php } ?>
                                </div>
                                <!-- title -->
                                <div class="accordeon_body--title font-18 text-right pl-0 pr-md-3 col-8" id="accordeon-title-<?= $accordeons['id'] ?>"><?= $accordeons['title'] ?></div>
                                <!-- button -->
                                <div class="open-accordion col-1 d-flex justify-content-center align-items-center font-18" data-url="<?= $accordeons['id'] ?>" style="cursor:pointer;">
                                    <div><i class="fas fa-chevron-down icon-open-close position-relative" id="icon-<?= $accordeons['id'] ?>" style="top:3px;"></i></div>
                                </div>   
                            </div>
                            <!-- divider -->
                            <!-- <div class="divider_second mb-2 mt-2  pl-3 pr-3"></div> -->
                            <!-- content -->
                            <div class="close-content accordeon_body--content font-15 primary text-justify" id="content-<?= $accordeons['id'] ?>">
                                <div class="content">
                                    <?php echo $accordeons['content']; ?>
                                </div>
                            </div>
                            <div class="accordeon_body--icons row">
                                <!-- badges -->
                                <!-- <div class="col-md-11 text-md-right badges">
                                    <?php foreach($accordeons['badges'] as $badges) { ?>
                                    <span class="badge badge-secondary"><?= $badges ?></span>
                                    <?php } ?>
                                </div> -->
                                <!-- button -->
                                <!-- <div class="col-md-1 pr-3 text-center">
                                    <div class="watch watch-quartier" id="watch-<?= $accordeons['id'] ?>" data-url="<?= $accordeons['id'] ?>"><i class="fas fa-plus font-17"></i></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
    <!-- title 2 -->
    <?php if(isset($_GET['reload'])) { ?>
    <h4 class="mb-4">Votre nouvel engagement</h4>
    <?php } ?>
    <!-- card -->
    <div class="card p-0">
        <?php if(isset($_GET['sign'])) { ?>
        <!-- head -->
        <div class="card-header w-900 font-20"><span class="font-22 danger">Etape 2 :</span> Enregistrez vos premiers engagements</div>
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
                            <div class="form-group col-lg-2 pl-0">
                                <!-- realisation -->
                                <label for="realisation" class="w-900">Réalisation</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="input-percent" placeholder="0" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- engagement -->
                            <div class="form-group col-lg-8 pl-0 pr-0">
                                <label for="engagement" class="w-900">Engagement</label>
                                <input type="text" class="form-control <?php if(isset($_GET['reload'])) { ?> is-invalid  <?php } ?>" id="engagement" placeholder="Rénover les arrêts de bus, etc.">
                                <div class="invalid-feedback">
                                Entrez au moins 2 lettres svp
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
                                    <?php foreach($cards->create() as $domaine) { ?>
                                        <option><?= $domaine['title'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- quartier -->
                            <div class="form-group col-lg-4 pr-0">
                                <label for="exampleFormControlSelect1" class="w-900">Quartier</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <?php foreach($cards->quartier() as $quartier) { ?>
                                        <option><?= $quartier['title'] ?></option>
                                    <?php } ?>
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
                        <button class="btn btn-primary col-md-7 mb-md-1" id="submit-2"><i class="fas fa-plus mr-1"></i> Ajouter une action</button>
                        <button class="btn btn-primary col-md-7 mb-md-1" id="submit-3"><i class="fas fa-directions mr-1"></i> Enregistrer et quitter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- reirect provisoire -->
<script>
  $('#submit-1').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=engagement&reload"});
  $('#submit-2').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=action"});
  $('#submit-3').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=dashboard"});
</script> 
<!-- sidebar menu .active -->
<script>var child = 6;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_notation.php'); ?>