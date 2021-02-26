<?php 
/**
* Page : Homepage
*/ 
// content
ob_start(); ?>
    <!-- <div class="container container-baromaire-body text-center mb-5"> -->
    <div class="text-center mb-5">
        <!-- title -->
        <h1 class="mb-5 main-title">Votre Maire respecte-t-il ses engagements ?</h1>
        <!-- subtitle -->
        <h5 class="main-subtitle primary mb-sm-4">Tapez le nom de votre commune ou son code postal</h5>
        <!-- form -->
        <form class="form-inline justify-content-center">
            <div class="form-group mb-sm-2 mr-sm-3 col-4 pl-0 pr-0">
                <input type="text" class="form-control col-sm-12" id="commune" placeholder="ex. : 75015 ou Paris" autocomplete>
                <!-- error message -->
                <div class="invalid-feedback">Commune ou code postal inconnus</div>
            </div>
            <button type="submit" class="submit btn btn-primary mb-2">Envoyer</button>
        </form>
    </div>
<!-- redirect provisoire -->
<script>
$('.submit').on('click', function(e) {
    e.preventDefault();
    window.location.href="/?progres";
});
</script>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_home.php'); ?>