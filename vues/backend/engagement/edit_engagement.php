<?php 
/**
* Page : Créer Premier engagement 
*/
if(isset($_GET['create'])) {
    $breadcrumb = 
    '<li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item"><a href="#">Engagements</a></li>
    <li class="breadcrumb-item"><a href="#">Ajouter</a></li>';

    $title = '<div class="col-12 pb-lg-4"><h4 class="w-900 font-30 text-center m-0">Ajouter un Engagement</h4></div>';
}
else {
    $breadcrumb = 
    '<li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item"><a href="#">Engagements</a></li>
    <li class="breadcrumb-item"><a href="#">Modifier</a></li>';
}
ob_start(); ?>
    <!-- start form -->
    <form>
        <!-- buttons -->
        <div class="col-12 col-lg-9 mx-auto p-0 mb-4 mt-5 mt-lg-0">
            <div class="row flex-column flex-lg-row justify-content-lg-end align-items-center">
                <?php if(!isset($_GET['create'])) { ?>
                <a href="/?admin=engagement&delete" class="col-6 col-lg-3 d-block btn btn-danger mr-lg-2 mb-2 mb-lg-0">Supprimer</a>
                <?php } ?>
                <button class="btn btn-primary col-6 col-lg-3" id="submit-1">Enregistrer</button>
            </div>
        </div>
    <!-- title -->
        <div class="row flex-column-reverse flex-md-row pb-4 pt-lg-4">
            <?php if(!isset($_GET['create'])) { ?>
            <div class="col-12 pb-lg-4"><h4 class="w-900 font-30 text-center m-0">Aménagement du nouveau mobilier urbain</h4></div>
            <?php } else { ?>
            <div class="col-12 pb-lg-4"><h4 class="w-900 font-30 text-center m-0">Ajouter un engagement</h4></div>
            <?php } ?>
        </div>
        
        <div class="card p-0 col-12 col-lg-9 mx-auto">
            <!-- body -->
            <div class="card-body pt-5 pb-5">
            <!-- form -->
                <!-- <form id="form-sign"> -->
                <div class="row">
                    <div class="col-12 p-0 mb-3">
                        <!-- row 1 -->
                        <div class="row">
                            <!-- engagement -->
                            <div class="form-group col-12 pl-0 pr-0">
                                <label for="engagement" class="w-900">Titre de l'engagement</label>
                                <input type="text" class="form-control" id="engagement" placeholder="Rénover les arrêts de bus, etc." <?php if(!isset($_GET['create'])) { ?> value="Aménagement du nouveau mobilier urbain" <?php } ?>>
                                <div class="invalid-feedback">
                                Entrez au moins 2 lettres svp
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 p-0 mb-3 mb-lg-0">
                        <div class="row">
                            <!-- order -->
                            <div class="form-group col-12 col-lg-6 pl-0 pr-0">
                                <label for="order" class="w-900">Ordre</label>
                                <input type="number" class="form-control" min="0" max="10" id="order" placeholder="1" <?php if(!isset($_GET['create'])) { ?> value="1" <?php } ?> >
                                <div class="invalid-feedback">Chiffre invalide</div>
                            </div>
                            <div class="form-group  col-12 col-lg-6 pr-0">
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
                            <!-- domaine -->
                            <div class="form-group pl-0 pr-0 col-12 col-lg-6">
                                <label for="exampleFormControlSelect1" class="w-900">Domaine d'action</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <?php foreach($cards->create() as $domaine) { ?>
                                        <option><?= $domaine['title'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- quartier -->
                            <div class="form-group pr-0 col-12 col-lg-6">
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
                <div class="col-12 p-0 pb-4">
                    <!-- photo -->
                    <div class="form-group col-lg-12 p-0">
                        <label for="order" class="w-900">Photo</label>
                        <!-- image -->
                        <div class="row align-items-center">
                            <div class="vol-12 col-lg-6 pb-1 p-0">
                                <?php if(isset($_GET['create'])) { ?>
                                <img src="assets/img/placeholder.png" alt="image engagements"/>
                                <?php } else { ?>
                                <img src="assets/img/engagements/image_19.jpg" alt="image engagements"/>
                                <?php } ?>
                            </div>
                            <div class="input-group col-12 col-lg-6 p-0 pl-lg-2 mt-3 mt-lg-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file1">
                                    <label class="custom-file-label" for="file1">
                                    fichier.jpg
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 card-admin">
            <h4 class="mb-4 mt-4 w-900 font-25 pt-3 pb-3 text-center">Vos Actions</h4>
            <div>
                <div class="card p-0 card-admin col-12 col-lg-9 mx-auto">
                    <!-- body -->
                    <div class="card-body pt-3 pb-3"> 
                    <?php if(!isset($_GET['create'])) { ?> 
                        <?php // description 
                        $i = 1;
                        foreach($accordeon->open() as $loads){ ?>
                            <div class="mt-md-4 mb-md-4">
                                <div class="row">
                                    <!-- order -->
                                    <div class="form-group col-12 col-lg-2 pl-0 pr-0">
                                        <label for="order" class="w-900">Ordre</label>
                                        <input type="number" class="form-control" min="0" max="10" id="order" placeholder="1" value="<?= $i++ ?>">
                                        <div class="invalid-feedback">Chiffre invalide</div>
                                    </div>
                                    <div class="form-group col-8 pr-0">
                                        <label for="engagement" class="w-900">Titre de l'action</label>
                                        <input type="text" class="form-control" id="engagement" placeholder="Rénover les arrêts de bus, etc." value="<?= $loads['title'] ?>">
                                        <div class="invalid-feedback">
                                        Entrez au moins 2 lettres svp
                                        </div>
                                    </div>
                                    <div class="form-group  col-12 col-lg-2 pr-0">
                                        <!-- realisation -->
                                        <label for="realisation" class="w-900">Réalisation</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="input-percent" placeholder="0" aria-label="Recipient's username" aria-describedby="basic-addon2" value="60">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="w-900">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"><?= $loads['content'] ?></textarea>
                                    <div class="invalid-feedback">
                                    Entrez au moins 2 lettres svp
                                    </div>
                                </div>
                                <div class="row justify-content-end" title="supprimer">
                                    <a class="btn btn-danger white-link d-block"><i class="fas fa-trash"></i></a>
                                </div>
                                <!-- divider -->
                                <div class="divider_second mb-3 mt-5 pl-3 pr-3"></div>
                            </div> 
                        <?php } ?>
                        <?php if(isset($_GET['action'])) { ?>
                            <div class="mt-md-4 mb-md-4">
                                <div class="row">
                                    <!-- order -->
                                    <div class="form-group col-12 col-lg-2 pl-0 pr-0">
                                        <label for="order" class="w-900">Ordre</label>
                                        <input type="number" class="form-control" min="0" max="10" id="order" placeholder="1" value="<?= $i++ ?>">
                                        <div class="invalid-feedback">Chiffre invalide</div>
                                    </div>
                                    <div class="form-group col-8 pr-0">
                                        <label for="engagement" class="w-900">Titre de l'action</label>
                                        <input type="text" class="form-control" id="engagement" placeholder="Rénover les arrêts de bus, etc." value="">
                                        <div class="invalid-feedback">
                                        Entrez au moins 2 lettres svp
                                        </div>
                                    </div>
                                    <div class="form-group  col-12 col-lg-2 pr-0">
                                        <!-- realisation -->
                                        <label for="realisation" class="w-900">Réalisation</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="input-percent" placeholder="0" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="w-900">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    <div class="invalid-feedback">
                                    Entrez au moins 2 lettres svp
                                    </div>
                                </div>
                                <div class="row justify-content-end" title="supprimer">
                                    <button class="btn btn-danger white-link d-block"><i class="fas fa-trash"></i></button>
                                </div>
                                <!-- divider -->
                                <div class="divider_second mb-3 mt-5 pl-3 pr-3"></div>
                            </div> 
                        <?php } ?>
                    <?php } else { ?>
                    <div class="col-12 col-lg-5 mx-auto p-0 text-center pt-3">Aucune action pour le moment</div>
                    <?php } ?>
                    <a href="/?admin=edit_engagement&action" class="btn btn-primary d-block col-12 col-md-2 mx-auto mt-5"><i class="fas fa-plus mr-2"></i> Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

<!-- scroll bottom when click on "+ Ajouter" -->
<?php if(isset($_GET['action'])) { ?>
<script>
    $("html, body").animate({ scrollTop: $(document).height() }, 1);
</script>
<?php } ?>

<!-- redirect -->
<script>
  $('#submit-1').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=engagement&reload"});
</script> 

<!-- sidebar menu .active -->
<script>var child = 2;</script>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>