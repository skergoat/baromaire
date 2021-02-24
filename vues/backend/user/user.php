<?php 
/**
* Page : Create user 
*/
$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>';
ob_start(); ?>

<?php if(isset($_GET['delete'])) { $alert = "Utilisateur supprimé !"; } ?>
<?php if(isset($_GET['reload'])) { $alert = "Modifications enregistreés !"; } ?>
<?php if(isset($_GET['create'])) { $alert = "Utilisateur ajouté !"; } ?>

<div class="row flex-column-reverse flex-md-row pb-4 pt-lg-4 pb-5">
    <!-- ajouter -->    
    <a href="/?admin=edit_user&create" class="btn btn-primary col-3 mx-auto col-lg-1 mt-5 mt-lg-0 mb-5 mb-lg-0">Ajouter</a>
    <!-- title -->
    <div class="col-12 col-lg-11"><h4 class="w-900 font-30 text-center m-0 mr-lg-5">Utilisateurs</h4></div>
</div>

<?php if(!empty($user->create())) { ?>
<div class="row">
    <div class="col-12 p-0 table-sm">
        <table class="table table-bordered table-hover bg-white shadow mb-4">
            <thead class="thead-light">
                <tr>
                    <th class="p-2">Id</th>
                    <th class="p-2">Nom</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Rôle</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; 
                    foreach($user->create() as $user) { ?>
                <tr> 
                    <th scope="row" class="p-2"><?= $i++ ?></th>
                    <td class="p-2"> <a href="/?admin=edit_user" class="underline"><?= $user['first_name'] ?> <?= $user['last_name'] ?></a></td>
                    <td class="p-2"><?= $user['email'] ?></td>
                    <td class="p-2"><?= $user['role'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="row justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php } else { ?>
<div class="alert alert-warning col-12 text-center d-block mx-auto">Aucun utilisateur pour le moment</div>
<?php } ?>

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