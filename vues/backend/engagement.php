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
    <!-- title -->
    <h4 class="mb-4">Vos engagements</h4>
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