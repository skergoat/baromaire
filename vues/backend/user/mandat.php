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
    <!-- buttons -->
    <div class="col-12 col-md-11 mx-auto p-0 mb-sm-5 mb-lg-4 mt-5 mt-lg-0">
        <div class="row flex-column flex-lg-row justify-content-lg-end align-items-center">
            <a href="/?admin=profil&reload" class="btn btn-primary col-6 col-lg-3" id="submit-1">Enregistrer</a>
        </div>
    </div>

    <!-- title -->
    <div class="row flex-column-reverse flex-md-row pb-0 pb-md-4 pt-lg-4">
        <div class="col-12 col-md-12 pb-lg-4"><h4 class="w-900 font-30 text-center m-0">Votre Mandat</h4></div>
    </div>

    <!-- content -->
    <div class="row card-admin">
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