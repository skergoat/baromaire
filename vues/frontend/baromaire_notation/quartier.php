<?php 
/**
* Page : Dans Votre quartier
*/

// header title and subtitle
$title_baromaire = "Ville de Beaubourg";
$subtitle_baromaire = "Entreprendre et Réussir";
// change widget and percentage here
// $widget = $progress->create('Le cadre de vie', 60, null, [6, 3, 2]);
$widget = $progress->create(false, 100, 30, [6, 3 ,2]);

// content
ob_start(); ?>
<!-- row 1 -->
<div class="mb-4">
    <h4 class="mb-4">Le cadre de vie</h4>
    <div class="engagements-list">
        <?php 
        foreach($accordeon->quartier() as $accordeons) {
        ?>
        <!-- accordeon -->
        <div class="accordeon mt-4">
            <div class="row">
                <!-- image -->
                <div class="accordeon_image col-md-3 p-0 pl-md-3 d-flex align-items-center justify-content-center position-relative">
                    <div>
                        <img src="assets/img/engagements/<?= $accordeons['image'] ?>" alt="image engagements" style="max-width:130px;"/>
                    </div>
                </div>
                <div class="accordeon_body col-md-9 p-0 pl-md-3 pb-2">
                    <!-- title -->
                    <div class="accordeon_body--title font-20 text-right pr-md-3 pt-md-1" id="accordeon-title-<?= $accordeons['id'] ?>"><?= $accordeons['title'] ?></div>
                    <!-- divider -->
                    <div class="divider_second mb-2 mt-2  pl-3 pr-3"></div>
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
                                        <div class="description-title font-13 text-left pr-md-3 pt-1 bold black"><?= $loads['title'] ?></div>
                                        <!-- content -->
                                        <div class="description-content font-12 text-left pr-md-3 pt-1"><?= $loads['content'] ?></div>
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
        <?php } ?>
    </div>
</div>
<!-- sidebar menu .active -->
<script>var child = 4;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_notation.php'); ?>