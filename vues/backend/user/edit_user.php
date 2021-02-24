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
            <a href="/?admin=engagement&delete" class="col-6 col-lg-3 d-block btn btn-danger mr-lg-2 mb-2 mb-lg-0">Supprimer</a>
            <?php } ?>
            <button class="btn btn-primary col-6 col-lg-3" id="submit-1">Enregistrer</button>
        </div>
    </div>
<!-- title -->
    <div class="row flex-column-reverse flex-md-row pb-4 pt-lg-4">
        <?php if(!isset($_GET['create'])) { ?>
        <div class="col-12 pb-lg-4"><h4 class="w-900 font-30 text-center m-0">Jeanne Pascal</h4></div>
        <?php } else { ?>
        <div class="col-12 pb-lg-4"><h4 class="w-900 font-30 text-center m-0">Ajouter un engagement</h4></div>
        <?php } ?>
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