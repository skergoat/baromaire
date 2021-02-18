<?php 
/**
* Page : Créer Votre Baromaire
*/ 
// content
ob_start(); ?>
<div class="container mb-5">
    <div class="row">
        <h2 class="mx-auto mb-10">Pour créer votre BAROMAIRE , rien de plus simple ! </h2>
    </div>
    <div class="row baromaine-p">
        <div class="col-sm-6 col-md-2">
            <img class="img-fluid px-3 px-sm-6 mb-4" src="assets/img/24.png" alt="">
        </div>
        <div class=" col-sm-6 col-md-10">
            <p>Remplissez ce formulaire et un membre de notre équipe prendra contact avec vous dans les 24 H, pour valider votre identité et votre légitimité à parler au nom du maire. </p>
            <p>Une fois validée, vous recevrez les codes d’accès vous permettant de créer votre BAROMAIRE .</p>
        </div>
    </div>
    <form class="needs-validation">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group row">
                    <label for="commune" class="col-sm-4 col-form-label">Quel est le nom de votre commune ou son code postal</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" required="">
                        <div class="invalid-feedback">Merci de renseigner ce champs</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="commune" class="col-sm-4 col-form-label">Votre nom</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" required="">
                        <div class="invalid-feedback">Merci de renseigner ce champs</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="commune" class="col-sm-4 col-form-label">Votre n° de mobile</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" required="">
                        <div class="invalid-feedback">Merci de renseigner ce champs</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="commune" class="col-sm-4 col-form-label">Votre email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" required="">
                        <div class="invalid-feedback">Merci de renseigner ce champs</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-3">
                        <label>Vous êtes :</label>
                    </div>
                    <div class="col-9">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Le Maire</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Un conseiller municipal</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">Le webmaster du site de la commune</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Autre</label>
                        </div>
                        <button class="btn btn-success float-right mt-5">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_home.php'); ?>