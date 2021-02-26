<?php 
/**
* Page : Create Baromaire
*/ 
// content
ob_start(); ?>
    <div class="container-baromaire text-center mt-5 mb-5 m-bottom">
        <!-- title -->
        <h1 class="mb-5">Pour créer votre BAROMAIRE, rien de plus simple !</h1>
        <!-- text -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="assets/img/24.png" alt="24" class="png24"/>
                    </div>
                    <div class="col-10">
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
                <div class="col-12 col-lg-6 pl-0 pr-lg-0">
                    <!-- input 1 -->
                    <div class="form-inline d-flex justify-content-end mb-3">
                        <div class="form-group">
                            <label for="inputPassword2" class="w-900">Nom ou code postal de votre commune</label>
                            <input type="text" class="form-control ml-3"/>
                        </div>
                    </div>
                    <!-- input 2 -->
                    <div class="form-inline  d-flex justify-content-end mb-3">
                        <div class="form-group">
                            <label for="inputPassword2" class="w-900">Votre nom</label>
                            <input type="text" class="form-control ml-3"/>
                        </div>
                    </div>
                    <!-- input 3 -->
                    <div class="form-inline d-flex justify-content-end mb-3">
                        <div class="form-group">
                            <label for="inputPassword2" class="w-900">Votre mobile</label>
                            <input type="tel" class="form-control ml-3"/>
                        </div>
                    </div>
                    <!-- input 4 -->
                    <div class="form-inline d-flex justify-content-end">
                        <div class="form-group">
                            <label for="inputPassword2" class="w-900">Votre email</label>
                            <input type="email" class="form-control ml-3"/>
                        </div>
                    </div>
                </div>
                <!-- right : radio -->
                <div class="col-12 col-lg-6 pr-0 pl-lg-5">
                    <div class="form-check d-flex justify-content-start mb-2 pl-5">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Le Maire
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start mb-2 pl-5">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Un conseiller municipal
                        </label>
                        </div>
                    <div class="form-check d-flex justify-content-start mb-2 pl-5">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Le webmaster du site de la commune
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start mb-4 pl-5">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Autre
                        </label>
                    </div>
                    <div class="col-7 form-group pl-4 pt-3 d-flex justify-content-end">
                        <button class="btn btn-success d-block">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_home.php'); ?>