<?php 
/**
* Page : Create user 
*/
if(isset($_GET['create'])) {
    $breadcrumb = 
    '<li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>
    <li class="breadcrumb-item"><a href="#">Ajouter</a></li>';

    $title = '<div class="col-12 pb-lg-4"><h4 class="w-900 font-30 text-center m-0">Ajouter un Engagement</h4></div>';
}
else {
    $breadcrumb = 
    '<li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>
    <li class="breadcrumb-item"><a href="#">Modifier</a></li>';
}
ob_start(); ?>

<?php if(isset($_GET['delete'])) { $alert = "Utilisateur ajouté !"; } ?>

<!-- start form -->
<form>

    <!-- buttons -->
    <div class="col-12 col-md-11 mx-auto p-0 mb-sm-5 mb-lg-4 mt-5 mt-lg-0">
        <div class="row flex-column flex-lg-row justify-content-lg-end align-items-center">
            <?php if(!isset($_GET['create'])) { ?>
            <a href="/?admin=user&delete" class="col-6 col-lg-3 d-block btn btn-danger mr-lg-2 mb-2 mb-lg-0">Supprimer</a>
            <a href="/?admin=user&reload" class="btn btn-primary col-6 col-lg-3" id="submit-1">Enregistrer</a>
            <?php } else { ?>
            <a href="/?admin=user&create" class="btn btn-primary col-6 col-lg-3" id="submit-1">Enregistrer</a>
            <?php } ?>
        </div>
    </div>

    <!-- title -->
    <div class="row flex-column-reverse flex-md-row pb-4 pt-lg-4">
        <div class="col-11 pb-lg-4"><h4 class="w-900 font-30 text-center m-0">
        <?php if(isset($_GET['create'])) { ?>
            Nouvel utilisateur
        <?php } else { ?>
            Jeanne Pascal
        <?php } ?>
        </h4></div>
    </div>

    <!-- content -->
    <div class="row">
        <div class="card p-0 col-11 mx-auto mt-3 mb-4">
            <!-- body -->
            <div class="card-body">
                <div class="row flex-column flex-md-row justify-content-md-center">
                    <div class="form-group col-12 col-md-5 p-0 pb-4 pb-md-0 p-0 pr-md-5">
                        <div class="text-center mb-4">
                            <label for="order" class="w-900">Photo</label>
                        </div>
                        <!-- image -->
                        <div class="row align-items-center">
                            <div class="col-12 pb-1 p-0 mb-5">
                                <div class="image image-placeholder-big img-thumbnail d-block"></div>
                            </div>
                            <div class="input-group col-12 p-0">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file1">
                                    <label class="custom-file-label" for="file1">
                                    fichier.jpg
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider_vertical p-0 d-none d-md-block"></div>
                    <div class="col-12 col-md-6 p-0 pl-md-5">
                        <div class="form-group col-12 p-0 mb-4">
                            <label for="last_name" class="w-900">Nom</label>
                            <input type="text" class="form-control" id="last_name" <?php if(!isset($_GET['create'])) { ?>value="Jeanne"<?php } ?>>
                            <!-- error message -->
                            <div class="invalid-feedback"></div>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group col-12 p-0 mb-4">
                            <label for="first_name" class="w-900">Prenom</label>
                            <input type="text" class="form-control" id="first_name" <?php if(!isset($_GET['create'])) { ?>value="Pascal"<?php } ?>>
                            <!-- error message -->
                            <div class="invalid-feedback"></div>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group col-12 p-0 mb-4">
                            <label for="email" class="w-900">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" <?php if(!isset($_GET['create'])) { ?>value="jpascal@gmail.com"<?php } ?>>
                            <!-- error message -->
                            <div class="invalid-feedback"></div>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group col-12 p-0 mb-4">
                            <label for="exampleFormControlSelect1" class="w-900">Rôle</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Utilisateur</option>
                                <option>Administrateur</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-admin p-0 pb-4 col-11 mx-auto mt-3">
            <!-- header -->
            <div class="card-header text-center w-900 font-18">
                Mot de Passe
            </div>
            <!-- body -->
            <div class="card-body">
                <div class="form-group col-12 col-md-6 mx-auto">
                    <label for="exampleInputPassword1" class="w-900">Entrez un mot de Passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" <?php if(!isset($_GET['create'])) { ?> value="password" <?php } ?> >
                    <!-- error message -->
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group col-12 col-md-6 mx-auto">
                    <label for="exampleInputPassword1" class="w-900">Répétez le mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" <?php if(!isset($_GET['create'])) { ?> value="password" <?php } ?> >
                     <!-- error message -->
                     <div class="invalid-feedback"></div>
                </div>
            </div>
        </div>
    </div>

</form>

<script>
// sidebar active 
var child = 5;
// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {
        $('[data-toggle="sidebar-5"').popover({
            placement:"right",
            html:true,
            title: "Utilisateur",
            content:"<div class='black'>Ajoutez un utilisateur et attribuez-lui un rôle</div>",
        }).popover('show');
    }
})
</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>