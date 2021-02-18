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
  <div class="col-sm-12 mb-5">
    <div class="card">
      <div class="card-body">
        <!-- title -->
        <div class="row">
            <img src="assets/img/admin/image_28.jpg" alt="" class="col-2 pr-0" id="login-logo-1"> 
            <p class="col-10 card-title text-left danger font-30 w-900">Pas de Baromaire dans votre commune ?</p>
        </div>
        <!-- body -->
        <p class="card-title text-center font-23">Vous pouvez engager votre commune ?</p>
        <p class="card-title text-center font-23 mb-2">Obtenez votre compte baromaire gratuit !</p>
        <p class="card-text text-center font-18 mb-2">ou</p>
        <p class="card-text text-center font-18">Ecrire à votre Maire pour mettre en place Baromaire dans votre commune.</p>
      </div>
    </div>
  </div>
  <!-- card bottom -->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <!-- title -->
        <p class="card-title text-center font-23"><img src="assets/img/icone_m.png" alt="icon baromaire" class="pr-0" id="login-logo-2">Acces à la gestion de votre Baromaire</p>
        <div class="alert alert-danger text-center mx-auto" id="alert-remove" role="alert" style="max-width:500px;">
          Email ou Mot de Passe incorrects 
        </div>
        <!-- form -->
        <form class="mb-3">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 col-form-label text-right">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="imputEmail" placeholder="email@example.com">
                </div>
            </div><br>
            <div class="row">
                <label for="inputPassword2" class="col-sm-3 col-form-label text-right mb-0">Password</label>
                <div class="form-group col-8 mb-0"> 
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