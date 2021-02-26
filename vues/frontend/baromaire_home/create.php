<?php 
/**
* Page : Create Baromaire
*/ 
// content
ob_start(); ?>
    <div class="container-baromaire container-baromaire-body text-center mt-5 mb-5 m-bottom">
        <!-- title -->
        <h1 class="mb-5 title">Pour créer votre BAROMAIRE, rien de plus simple !</h1>
        <!-- text -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-2 mb-3 mb-sm-0">
                        <img src="assets/img/24.png" alt="24" class="png24"/>
                    </div>
                    <div class="col-12 col-sm-10">
                        <p class="text-justify">
                        Remplissez ce formulaire et un membre de notre équipe prendra contact avec vous dans les 24 H, pour valider votre identité 
                        et votre légitimité à parler au nom du maire.</p>
                        <p class="text-justify">Une fois validée, vous recevrez les codes d’accès vous permettant de créer votre BAROMAIRE .</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- form -->
        <form action="" class="mt-5">
            <div class="row">
                <!-- left : input -->
                <div class="col-12 col-sm-6 pl-0 pr-0 pr-lg-5">
                    <!-- input 1 -->
                    <div class="form-inline d-flex justify-content-end mb-3">
                        <div class="form-group">
                            <label for="inputPassword2" class="w-900">Nom ou code postal<br class="d-none d-sm-inline-block"> de votre commune</label>
                            <input type="text" class="form-control ml-0 ml-sm-3"/>
                        </div>
                    </div>
                    <!-- input 2 -->
                    <div class="form-inline  d-flex justify-content-end mb-3">
                        <div class="form-group">
                            <label for="inputPassword2" class="w-900">Votre nom</label>
                            <input type="text" class="form-control ml-0 ml-sm-3"/>
                        </div>
                    </div>
                    <!-- input 3 -->
                    <div class="form-inline d-flex justify-content-end mb-3">
                        <div class="form-group">
                            <label for="inputPassword2" class="w-900">Votre mobile</label>
                            <input type="tel" class="form-control ml-0 ml-sm-3"/>
                        </div>
                    </div>
                    <!-- input 4 -->
                    <div class="form-inline d-flex justify-content-end">
                        <div class="form-group">
                            <label for="inputPassword2" class="w-900">Votre email</label>
                            <input type="email" class="form-control ml-0 ml-sm-3"/>
                        </div>
                    </div>
                </div>
                <!-- right : radio -->
                <div class="col-12 col-sm-6 pr-0 pl-0 mt-5 mt-sm-0 pl-sm-5">
                    <div class="row">
                        <div class="col-12 col-lg-3 text-center text-sm-left p-0 mb-3">
                            <div>Vous êtes :</div>
                        </div>
                        <div class="col-12 col-lg-10 p-0">
                            <div class="form-check d-flex flex-column flex-sm-row align-items-center justify-content-sm-start mb-4 mb-sm-2 pl-0 pl-sm-5">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label w-900 mt-4 mt-sm-0" for="exampleRadios1">
                                    Le Maire
                                </label>
                            </div>
                            <div class="form-check d-flex flex-column flex-sm-row align-items-center justify-content-sm-start mb-4 mb-sm-2 pl-0 pl-sm-5">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label w-900 mt-4 mt-sm-0" for="exampleRadios2">
                                    Un conseiller municipal
                                </label>
                                </div>
                            <div class="form-check d-flex flex-column flex-sm-row align-items-center justify-content-sm-start mb-4 mb-sm-2 pl-0 pl-sm-5">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label w-900 mt-4 mt-sm-0" for="exampleRadios3">
                                    Le webmaster du site de la commune
                                </label>
                            </div>
                            <div class="form-check d-flex flex-column flex-sm-row align-items-center justify-content-sm-start mb-4 mb-sm-2 pl-0 pl-sm-5">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label w-900 mt-4 mt-sm-0" for="exampleRadios3">
                                    Autre
                                </label>
                            </div>
                            <div class="col-7 form-group p-0 pl-sm-4 mt-4 d-flex justify-content-center justify-content-sm-start">
                                <button class="btn btn-success d-block">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_home.php'); ?>