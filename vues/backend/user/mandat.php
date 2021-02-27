<?php 
/**
* Page : Mandat
*/

$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Profil</a></li>';

ob_start(); ?>

<?php if(isset($_GET['reload'])) { $alert = "Modifications enregistrées !"; } ?>

<!-- start form -->
<form>

    <div class="col-11 mx-auto p-0 pb-4 pt-lg-4 position-relative pt-5 pt-lg-0">
        <!-- ajouter -->    
        <a href="/?admin=mandat&reload" class="btn btn-primary col-4 col-md-2 position-absolute ajouter-domaine ml-0 ml-md-1 ml-lg-0">Enregistrer</a>
        <!-- title -->
        <div class="col-12"><h4 class="w-900 font-30 text-center m-0">Votre Mandat</h4></div>
    </div>

    <!-- content -->
    <div class="row card-admin pr-2 pl-2 pr-md-0 pl-md-0">
        <div class="card p-0 col-12 col-lg-9 mx-auto mt-3">
            <!-- body -->
            <div class="card-body pt-lg-4 pb-4">
            <!-- form -->
                <form class="row flex-column align-items-center">
                    <div class="col-12 p-0">
                        <div class="row">
                            <div class="form-group col-12 col-lg-6">
                                <label for="debut" class="col-form-label text-left w-900">Début de mandat : </label>
                                <div class="pl-0">
                                    <input type="date" class="form-control" id="debut" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label for="fin" class="col-form-label text-left w-900">Fin de mandat : </label>
                                <div class="pl-0">
                                    <input type="date" class="form-control" id="fin" placeholder="Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="debut" class="col-form-label text-left w-900">Nom de votre commune :</label>
                        <input type="text" class="form-control" id="debut" value="Beaubourg">
                    </div>
                    <div class="form-group col-12">
                        <label for="slogan" class="col-form-label text-left w-900">Slogan de votre commune : </label>
                        <div class="form-group">
                            <textarea class="form-control" id="slogan" rows="5" value="Enteprendre et Réussir"></textarea>
                            <small id="passwordHelpInline" class="text-muted">
                            max. 300 mots 
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</form>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>