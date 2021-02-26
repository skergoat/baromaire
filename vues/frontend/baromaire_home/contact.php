<?php 
/**
* Page : Contact
*/ 
// content
ob_start(); ?>
    <div class="container-baromaire-body col-12 pl-0 pr-0 col-lg-6 mx-auto text-center mt-5">
        <form>
            <div class="row">
                <div class="col-12 pr-0 pl-0 pr-lg-3">
                    <div class="form-group text-left">
                        <label for="exampleFormControlInput1" class="w-900">Votre Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group text-left mb-0">
                        <label for="exampleFormControlTextarea1" class="w-900">Votre message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                </div>
                <div class="mx-auto m-lg-none position-relative">
                    <button class="btn btn-success btn-right position-absolute" style="bottom:0;">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_home.php'); ?>