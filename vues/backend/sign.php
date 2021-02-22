<?php 
/**
* Page : Create Account 
*/

// header title and subtitle
$title_baromaire = "Ville de Beaubourg";
$subtitle_baromaire = "Entreprendre et Réussir";
// change widget and percentage here
$widget = $progress->create(false, 0, 0, [0, 0 ,0]);

ob_start(); ?>

<div class="mb-4">
    <!-- alert -->
    <div class="alert alert-success" role="alert">
    Bravo ! Vous êtes connecté comme administrateur de la ville de <a href="#" class="alert-link">Beaubourg</a>.
    </div>
    <!-- title -->
    <h4 class="mb-4 mt-4">Créez votre Baromaire</h4>
    <!-- card -->
    <div class="card p-0">
        <!-- head -->
        <div class="card-header w-900 font-20"><span class="font-22 danger">Etape 1 :</span> renseigner vos dates de mandat</div>
        <!-- body -->
        <div class="card-body pt-lg-5 pb-4">
        <!-- form -->
            <form>
                <div class="form-group row justify-content-center align-items-md-center">
                    <label for="debut" class="col-md-12 col-lg-4 col-form-label text-left pr-0 w-900">Début de mandat : </label>
                    <div class="col-sm-12 col-lg-4  pl-0">
                        <input type="date" class="form-control" id="debut" placeholder="Password">
                    </div>
                </div><br>
                <div class="form-group row justify-content-center align-items-md-center pb-4">
                    <label for="fin" class="col-md-12 col-lg-4 col-form-label text-left pr-0 w-900">Fin de mandat : </label>
                    <div class="col-sm-12 col-lg-4  pl-0">
                        <input type="date" class="form-control" id="fin" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row justify-content-center align-items-md-center">
                    <button type="submit" class="btn btn-primary mb-2 col-md-12 col-lg-7" id="submit">Enregistrer et passer à l'étape suivante <i class="fas fa-angle-right font-17" style="position:relative;top:1.5px;left:3px;"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- reirect provisoire -->
<script>
  $('#submit').on('click', function(e) {e.preventDefault(); window.location.href="?admin=engagement&sign"});
</script> 
<!-- sidebar menu .active -->
<script>var child = 6;</script>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_admin.php'); ?>