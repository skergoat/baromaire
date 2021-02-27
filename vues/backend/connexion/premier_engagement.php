<?php 
/**
* Page : Create Account 
*/

ob_start(); ?>
    <div>
        <h4 class="mb-4 mt-5 w-900 font-30 pt-3 pb-3 text-center">Assistant de première connexion</h4>
    </div>
    <!-- card -->
    <div class="row">
        <!-- card -->
        <div class="card col-12 col-lg-6 p-0 mx-auto">
            <div class="card-header w-900 font-20 pointer" data-toggle="connexion-1"><span class="font-22 danger">Etape 3 :</span> Ajoutez votre premier engagement</div>
            <!-- body -->
            <div class="card-body pt-4 pb-4">
            <!-- form -->
                <form id="form-sign">
                    <div class="row">
                        <div class="col-12 p-0 mb-3">
                            <!-- row 1 -->
                            <div class="row">
                                <!-- order -->
                                <div class="form-group col-lg-2 pl-0 pr-0 pr-lg-2">
                                    <label for="order" class="w-900">Ordre</label>
                                    <input type="number" class="form-control" min="0" max="10" id="order" placeholder="1">
                                    <div class="invalid-feedback">Chiffre invalide</div>
                                </div>
                                <!-- engagement -->
                                <div class="form-group col-lg-7 pl-0 pr-0">
                                    <label for="engagement" class="w-900">Engagement</label>
                                    <input type="text" class="form-control" id="engagement" placeholder="Rénover les arrêts de bus, etc.">
                                    <div class="invalid-feedback">
                                    Entrez au moins 2 lettres svp
                                    </div>
                                </div>
                                <div class="form-group col-lg-3 pr-0 pl-0 pl-lg-2">
                                    <!-- realisation -->
                                    <label for="realisation" class="w-900">Réalisation</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="input-percent" placeholder="0" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- row 2 -->
                        <div class="col-12 p-0 mb-3">
                            <div class="row">
                                <!-- photo -->
                                <div class="form-group col-lg-4 pl-0 pr-0 pr-lg-2">
                                    <label for="order" class="w-900">Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file1">
                                            <label class="custom-file-label" for="file1">
                                            fichier.jpg
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- domaine -->
                                <div class="form-group col-lg-4 pl-0 pr-0 pointer" data-toggle="connexion-2">
                                    <label for="exampleFormControlSelect1" class="w-900">Domaine d'action</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                            <option>_</option>
                                    </select>
                                </div>
                                <!-- quartier -->
                                <div class="form-group col-lg-4 pr-0 pl-0 pl-lg-2 pointer" data-toggle="connexion-3">
                                    <label for="exampleFormControlSelect1" class="w-900">Quartier</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                            <option>_</option>
                                    </select>
                                </div>
                            </div>
                        </div>     
                    </div>
                    <!-- textarea -->
                    <div class="col-12 p-0 mb-4">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="w-900">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            <div class="invalid-feedback">
                            Entrez au moins 2 lettres svp
                            </div>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-12 p-0">
                        <div class="row justify-content-center align-items-center">
                            <button class="btn btn-primary col-md-7 mb-md-1" id="submit-1">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 

<!-- popover -->
<script>
    $(document).ready(function() {
        var width = $(window).width();
        if(width >= 991) {
            $('[data-toggle="connexion-1"]').popover({
                placement:"top",
                title: "Les Engagements" ,
                content:"Ajoutez des engagements pour rappeler les grandes lignes de votre programme",
            }).popover('show');
            
            $('[data-toggle="connexion-2"]').popover({
                placement:"left",
                html:true,
                title: "Les Domaines d'action",
                content:"<a href='/?admin=domaine'>Ajoutez des domaines</a> d'action comme 'Centre Ville' ou 'Equipement' par ex. pour qualifier votre engagement",
            }).popover('show');

            $('[data-toggle="connexion-3"]').popover({
                placement:"bottom",
                html:true,
                title: "Les quartiers",
                content:"<a href='/?admin=quartier'>Ajoutez des quartiers</a> pour localiser votre engagement",
            }).popover('show');
        }
    });
</script>

<!-- redirect provisoire -->
<script>
$('#submit-1').on('click', function(e) {e.preventDefault(); window.location.href="/?admin=engagement"});
</script>

<?php $content = ob_get_clean(); ?>
<?php require('vues/layout_sign.php'); ?>