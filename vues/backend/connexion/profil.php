<?php 
/**
* Page : Create Account 
*/
$title = "Créez votre Baromaire";
ob_start(); ?>
    <div>
        <h4 class="mb-4 mt-5 w-900 font-30 pt-3 pb-3 text-center">Assistant de première connexion</h4>
    </div>
    <!-- card -->
    <div class="row">
        <div class="card p-0 col-12 col-lg-7 mx-auto mt-3">
            <!-- head -->
            <div class="card-header w-900 font-20"><span class="font-22 danger">Etape 2 :</span> Votre Profil</div>
            <!-- body -->
            <div class="card-body pt-lg-4 pb-4">
            <!-- form -->
                <form class="row">
                    <!-- file -->
                    <div class="form-group col-6 pl-0">
                        <label for="order" class="w-900 text-center w-100 font-18">Photo de profil</label>
                        <div class="image image-placeholder img-placeholder-assistant img-thumbnail mx-auto mb-4"></div>
                        <div class="input-group col-9 mx-auto">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file1">
                                <label class="custom-file-label custom-file-label-assistant" for="file1">
                                fichier.jpg
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- name -->
                    <div class="col-6 mb-4">
                        <div class="form-group col-12 p-0">
                            <label for="debut" class="col-form-label text-left w-900">Votre Nom</label>
                            <input type="text" class="form-control" id="debut" placeholder="Dupont">
                        </div><br>
                        <div class="form-group col-12 p-0">
                            <label for="debut" class="col-form-label text-left w-900">Votre Prénom</label>
                            <input type="text" class="form-control" id="debut" placeholder="Robert">
                        </div><br>
                        <button type="submit" class="btn btn-primary mb-2 col pl-0 pr-0 mx-auto" id="submit">Enregistrer et passer à l'étape suivante <i class="fas fa-angle-right font-17" style="position:relative;top:1.5px;left:3px;"></i></button> 
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- reirect provisoire -->
<script>
//   $('#submit').on('click', function(e) {e.preventDefault(); window.location.href="?admin=engagement&sign"});
$('#submit').on('click', function(e) {e.preventDefault(); window.location.href="?admin=premier_engagement"});
</script> 
<!-- sidebar menu .active -->
<script>var child = 6;</script>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_sign.php'); ?>