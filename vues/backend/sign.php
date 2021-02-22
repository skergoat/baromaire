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
        <div class="card p-0 col-12 col-lg-6 mx-auto mt-3">
            <!-- head -->
            <div class="card-header w-900 font-20"><span class="font-22 danger">Etape 1 :</span> Votre Mandat</div>
            <!-- body -->
            <div class="card-body pt-lg-4 pb-4">
            <!-- form -->
                <form class="row flex-column align-items-center">
                    <div class="col-12 col-lg-9 p-0">
                        <div class="row">
                            <div class="form-group col-12 col-lg-6 pl-0">
                                <label for="debut" class="col-form-label text-left w-900">Début de mandat : </label>
                                <div class="pl-0">
                                    <input type="date" class="form-control" id="debut" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group col-12 col-lg-6 p-0">
                                <label for="fin" class="col-form-label text-left w-900">Fin de mandat : </label>
                                <div class="pl-0">
                                    <input type="date" class="form-control" id="fin" placeholder="Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 col-lg-9 p-0">
                        <label for="debut" class="col-form-label text-left w-900">Nom de votre commune :</label>
                        <input type="text" class="form-control" id="debut" placeholder="Paris, Lyon, etc.">
                    </div>
                    <div class="form-group col-12 col-lg-9 p-0">
                        <label for="slogan" class="col-form-label text-left w-900">Slogan de votre commune : </label>
                        <div class="form-group">
                            <textarea class="form-control" id="slogan" rows="3" placeholder="L'excellence avant tout !"></textarea>
                            <small id="passwordHelpInline" class="text-muted">
                            max. 300 mots 
                            </small>
                        </div>
                    </div>
                    <div class="col-10">
                        <button type="submit" class="btn btn-primary mb-2 col-12 mx-auto" id="submit">Enregistrer et passer à l'étape suivante <i class="fas fa-angle-right font-17" style="position:relative;top:1.5px;left:3px;"></i></button>
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
<?php require('vues/layout_sign.php'); ?>