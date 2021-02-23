<?php 
/**
* Page : Admin Dashboard 
*/
$breadcrumb = 
'<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>';

$title = '<div class="col-12 "><h4 class="w-900 font-30 text-center m-0">Tableau de Bord</h4></div>';
$widget = $progress->createAdmin(false, 100, 30, [6, 3 ,2]);
ob_start(); ?>
<div class="mb-5 pt-4 card-admin">
    <!-- top -->
    <div class="row">
        <!-- widget -->
        <?= $widget; ?>
    </div>
    <!-- middle -->
    <div class="row">
        <!-- engagements -->
        <div class="col-12 pt-4">
            <h4 class="mb-4 mt-4 w-900 font-25 pt-3 pb-3 text-center">Vos engagements</h4>
        <?php foreach($accordeon->create() as $accordeons) {
            ?>
            <!-- accordeon -->
            <div class="accordeon mt-4 shadow">
                <div class="row">
                    <!-- image -->
                    <div class="accordeon_image col-md-3 p-0 pl-md-3 d-flex align-items-center justify-content-center position-relative">
                        <div>
                            <img src="assets/img/engagements/<?= $accordeons['image'] ?>" alt="image engagements" style="max-width:130px;"/>
                        </div>
                    </div>
                    <div class="accordeon_body col-md-9 p-0 pl-md-3 pb-2">
                        <!-- title -->
                        <div class="accordeon_body--title font-20 text-right pr-md-3 pt-md-1" id="accordeon-title-<?= $accordeons['id'] ?>"><a href="/?admin=edit"  class="underline" title="modifier"><?= $accordeons['title'] ?></a></div>
                        <!-- divider -->
                        <div class="divider_second mb-2 mt-2 pl-3 pr-3"></div>
                        <!-- content -->
                        <div class="accordeon_body--content font-15 primary text-justify pr-md-3 pb-md-3">
                            <div class="content" id="content-<?= $accordeons['id'] ?>">
                                <?php echo $accordeons['content']; ?>
                            </div>
                            <div class="description"id="description-<?= $accordeons['id'] ?>">
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
                        <div class="accordeon_body--icons row">
                            <!-- badges -->
                            <div class="col-md-11 text-md-right badges">
                                <?php foreach($accordeons['badges'] as $badges) { ?>
                                <span class="badge badge-secondary"><?= $badges ?></span>
                                <?php } ?>
                            </div>
                            <!-- button -->
                            <div class="col-md-1 pr-3 text-center">
                                <div class="watch watch-quartier" id="watch-<?= $accordeons['id'] ?>" data-url="<?= $accordeons['id'] ?>"><i class="fas fa-plus font-17"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?><br>
            <!-- pagination -->
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
    <!-- bottom -->
    <div class="col-12">
        <h4 class="mb-4 mt-4 w-900 font-25 pt-3 pb-3 text-center">Vos catégories</h4>
        <!-- categories -->
        <div class="row">
            <div class="col-12 col-lg-6 pl-0 mb-lg-0 mb-4">
                <table class="table table-bordered bg-white shadow">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="8" class="text-center">Les Domaines d'Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; 
                            foreach($cards->create() as $domaine) { ?>
                        <tr>    
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $domaine['title'] ?></td>
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
            <div class="col-12 col-lg-6 pr-0">
                <table class="table table-bordered bg-white shadow">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="8" class="text-center">Les Quartiers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; 
                            foreach($cards->quartier() as $quartier) { ?>
                        <tr>    
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $quartier['title'] ?></td>
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
    </div>
</div>
<script>
// sidebar active 
var child = 1;
// popover 
$(function () {
    var width = $(window).width();
    if(width >= 991) {
        $('[data-toggle="sidebar-1"').popover({
            placement:"right",
            html:true,
            title: "Tableau de bord",
            content:"<div class='black'>Une vision d'ensemble de votre mandat</div>",
        }).popover('show');
    }
})
</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>