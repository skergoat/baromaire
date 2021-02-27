<?php 
/**
* Page : Admin Login
*/
// header title and subtitle
$title_baromaire = "Ville de Beaubourg";
$subtitle_baromaire = "Entreprendre et Réussir";
// change widget and percentage here
$widget = $progress->create(false, 100, 30, [6, 3 ,2]);

ob_start(); ?>

<div class="row">
<!-- card top -->
  <div class="col-lg-12 mb-5 login-card-top">
    <div class="card">
      <div class="card-body">
        <!-- title -->
        <div class="row align-items-center">
            <img src="assets/img/admin/image_28.jpg" alt="" class="col-2 pr-0" id="login-logo-1"> 
            <p class="col-lg-10 card-title danger font-25 text-center w-900 pr-0 pl-0">Pas de Baromaire dans votre commune ?</p>
        </div>
        <!-- body -->
        <p class="card-title text-center font-23">Vous pouvez engager votre commune ?</p>
        <p class="card-title text-center font-23 mb-2">Obtenez votre compte Baromaire gratuit !</p>
        <p class="card-text text-center font-18 mb-2">ou</p>
        <p class="card-text text-center font-18">Ecrire à votre Maire pour lui demander le Baromaire de votre commune.</p>
      </div>
    </div>
  </div>
  <!-- card bottom -->
  <div class="col-lg-12 login-card-bottom">
    <div class="card">
      <div class="card-body">
        <p class="text-center font-23 d-none" id="login-logo-p-3">
          <img src="assets/img/icone_m.png" alt="icon baromaire" class="pr-0" id="login-logo-3">
        </p>
        <!-- title -->
        <p class="text-center font-23 mb-4">
          <img src="assets/img/icone_m.png" alt="icon baromaire" class="pr-0 d-inline-block" id="login-logo-2">
          Accès à la gestion de votre Baromaire
        </p>
        <div class="alert alert-danger text-center col-12 col-lg-9 mx-auto" id="alert-remove" role="alert">
          Email ou Mot de Passe incorrects 
        </div>
        <!-- form -->
        <form class="mb-3">
            <div class="form-group row justify-content-center pb-3">
                <label for="staticEmail" class="pl-0 pr-0 col-lg-2 col-form-label text-right">Email</label>
                <div class="col-lg-9 pr-0">
                    <input type="email" class="form-control" id="imputEmail" placeholder="email@example.com">
                </div>
            </div>
            <div class="row justify-content-center">
                <label for="inputPassword2" class=" pl-0 pr-0 col-lg-2 col-form-label text-right mb-0">Mot de Passe</label>
                <div class="form-group col-lg-8 mb-0"> 
                    <input type="password" class="form-control" id="inputPassword2" style="width:100%;">
                </div>
                <button type="submit" class="btn btn-primary" id="submit">OK</button>
            </div><br>
            <div class="form-check text-right pr-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Mot de Passe oublié ? </label>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- sidebar menu .active -->
<script>var child = 6;</script>
<!-- redirect provisoire -->
<script>
  $('#submit').on('click', function(e) {e.preventDefault(); window.location.href="?admin=sign"});
</script> 
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_notation.php'); ?>