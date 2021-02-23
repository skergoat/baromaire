<?php 
/**
* Page : Créer Premier engagement 
*/
if(isset($_GET['create'])) {
    $title = '<div class="col-12 pb-4"><h4 class="w-900 font-30 text-center m-0">Ajouter un Engagement</h4></div>';
}
else {
    $title = '<div class="col-12 pb-4"><h4 class="w-900 font-30 text-center m-0">Aménagement du nouveau mobilier urbain</h4></div>';
}
ob_start(); ?>
    <!-- edit alert -->
    <?php if(isset($_GET['reload'])) { $alert = "Action ajoutée !"; } ?>
    <!-- card -->
    <div class="card p-0 <?php if(isset($_GET['create'])) { ?> card-admin <?php } ?> col-12 col-lg-9 mx-auto">
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
                                <input type="number" class="form-control" min="0" max="10" id="order" placeholder="1" <?php if(!isset($_GET['create'])) { ?> value="1" <?php } ?> >
                                <div class="invalid-feedback">Chiffre invalide</div>
                            </div>
                            <!-- engagement -->
                            <div class="form-group col-lg-7 pl-0 pr-0">
                                <label for="engagement" class="w-900">Engagement</label>
                                <input type="text" class="form-control" id="engagement" placeholder="Rénover les arrêts de bus, etc." <?php if(!isset($_GET['create'])) { ?> value="Aménagement du nouveau mobilier urbain" <?php } ?>>
                                <div class="invalid-feedback">
                                Entrez au moins 2 lettres svp
                                </div>
                            </div>
                            <div class="form-group col-lg-3 pr-0">
                                <!-- realisation -->
                                <label for="realisation" class="w-900">Réalisation</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="input-percent" placeholder="0" aria-label="Recipient's username" aria-describedby="basic-addon2" <?php if(!isset($_GET['create'])) { ?> value="30" <?php }?> >
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
                                    <?php }  ?>
                                </select>
                            </div>
                        </div>
                    </div>     
                </div>
                <!-- textarea -->
                <div class="col-12 p-0 mb-4">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="w-900">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"><?php if(!isset($_GET['create'])) { ?>Le nouveau mobilier urbain a été mis en place selon le calendrier prévu. L'inauguration a eu lieu le XX mars en présence du Président de la Region. Fourmies est la première ville de France à avoir installé du mobilier urbain entièrement fabriqué sur le territoire à partir de matériaux renouvelables.<?php } ?></textarea>
                        <div class="invalid-feedback">
                        Entrez au moins 2 lettres svp
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <div class="row justify-content-lg-center align-items-sm-center">
                        <button class="btn btn-primary col-md-4 mb-md-1" id="submit-1">Enregistrer</button>
                        <!-- <button class="btn btn-primary col-md-7 mb-md-1" id="submit-2-disabled" data-toggle="popover-3" data-placement="top"><i class="fas fa-plus mr-1"></i> Ajouter une action</button>
                        <button class="btn btn-primary col-md-7 mb-md-1" id="submit-3"><i class="fas fa-directions mr-1"></i> Enregistrer et quitter</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if(!isset($_GET['create'])) { ?>
    <div class="mt-5 card-admin">
        <h4 class="mb-4 mt-4 w-900 font-25 pt-3 pb-3 text-center">Vos Actions</h4>
        <div>
            <?php // description
            foreach($accordeon->open() as $loads){ ?>
            <div class="mt-md-4 mb-md-4">
                <div class="row">
                    <div class="col-md-9 p-0">
                        <!-- title -->
                        <div class="description-title font-13 text-left pr-3 pt-1 bold black"><?= $loads['title'] ?></div>
                        <!-- content -->
                        <div class="description-content font-12 text-left pr-3 pt-1"><?= $loads['content'] ?></div>
                    </div>
                    <div class="col-md-3 p-0">
                        <div class="progresses progresses-3 mb-2">
                            <div class="barOverflow barOverflow-3">
                                <div class="success-bar bar bar-third"></div>
                            </div>
                            <span>60</span>%
                        </div>
                    </div>
                </div>
                <!-- divider -->
                <div class="divider_second mb-2 mt-2 pl-3 pr-3"></div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
<!-- reirect provisoire -->
<script>
  $('#submit-1').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=engagement&reload"});
  <?php if(isset($_GET['reload'])) { ?>
  $('#submit-2').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=action"});
  <?php } ?>
  $('#submit-3').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=dashboard"});
</script> 
<!-- sidebar menu .active -->
<script>var child = 2;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>