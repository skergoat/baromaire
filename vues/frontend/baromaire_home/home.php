<?php 
/**
* Page : Homepage
*/ 
// content
ob_start(); ?>

<div class="container text-center mb-5"><br>
    <!-- title -->
    <h1 class="mb-5">Votre Maire respecte-t-il ses engagements ?</h1>
    <!-- subtitle -->
    <h5 class="primary mb-4">Tapez le nom de votre commune ou son code postal</h5>
    <!-- form -->
    <form class="form-inline justify-content-center">
        <div class="form-group mb-2 mr-3 col-4 pl-0 pr-0">
            <input type="text" class="form-control col-12" id="commune" value="75015 ou Paris">
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