<?php 
/***
 * Layout : Backend
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1596c4b58a.js" crossorigin="anonymous"></script>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- my styles -->
    <link rel="stylesheet" href="assets/css/baromaire_admin/style.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <!-- bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- progress bar js -->
    <script>$class = ".progresses";</script>
    <script src="assets/js/progress_bar.js"></script>
</head>
<body id="page-top">
    <div class="container-baromaire mb-5">
        <!-- header -->
        <header class="header_baromaire row align-items-center justify-content-between">
            <div class="logo-block">
                <a href="/">
                    <img class="logo logo-notation" src="assets/img/logo_baromaire.png" alt="">
                </a>
            </div>
            <div>
            <div class="title_baromaire font-50 text-right"><?= $title_baromaire ?></div>
            <div class="subtitle_baromaire font-30 text-right"><?= $subtitle_baromaire ?></div>
            </div>
        </header>
        <!-- sidebars -->
        <div class="row pt-4">
            <!-- sidebar left -->
                <div class="card p-3 col-2" style="height:100%;">
                    <div class="divider_first pb-3 mb-3">
                        <div class="position-relative">
                            <?php if(isset($_GET['admin'])) { ?>
                            <!-- edit button -->
                            <div class="icon-edit icon-edit-picture btn btn-primary pr-2 pl-2 pt-1 pb-1 position-absolute"><i class="fas fa-pencil-alt"></i></div>
                            <?php } ?>
                            <!-- img mayor -->
                            <!-- <div class="image image-rounded img-thumbnail mx-auto mb-3"></div> -->
                            <!-- img placeholder -->
                            <div class="image image-placeholder img-thumbnail mx-auto mb-3"></div>
                        </div>
                        <div class="row">
                            <div class="<?php if(isset($_GET['admin'])) { ?> col-10 <?php } else { ?>col-12<?php } ?> p-0">
                                <h5 class="diviber_first_title text-center primary">Robert <span class="uppercase">Dupont</span></h5>
                                <h5 class="divider_first_subtitle text-center primary">Le Maire</h5>
                            </div>
                            <?php if(isset($_GET['admin'])) { 
                                if($_GET['admin'] == 'sign') { ?>
                                 <!-- edit button -->
                                <div  class="col-2 p-0">
                                    <div class="icon-edit btn btn-primary pr-2 pl-2 pt-1 pb-1 position-absolute" data-toggle="popover" data-placement="bottom" title="Modifier un Elément" data-content="Modifiez directement les éléments en cliquant sur ce bouton"><i class="fas fa-pencil-alt"></i></div>
                                </div>
                            <?php } else { ?>
                                 <!-- edit button -->
                                 <div  class="col-2 p-0">
                                    <div class="icon-edit btn btn-primary pr-2 pl-2 pt-1 pb-1 position-absolute"><i class="fas fa-pencil-alt"></i></div>
                                </div>
                            <?php } } ?>
                        </div>
                    </div>
                    <ul class="sidebar-left_nav">
                        <li class="pl-2"><a href="/?progres"><i class="fas fa-ruler-combined mr-3"></i>Suivre les progrès</a></li>
                        <li class="pl-2"><a href="/?demarche"><i class="fas fa-puzzle-piece mr-3"></i>Notre démarche</a></li>
                        <li class="pl-2"><a href="/?engagement"><i class="fas fa-file-signature mr-3"></i>Nos engagements</a></li>
                        <li class="pl-2"><a href="/?quartier"><i class="fas fa-map-marked-alt mr-3"></i>Votre quartier</a></li>
                        <li class="pl-2"><a href="#"><i class="fas fa-envelope mr-3"></i>Me Contacter</a></li>
                        <li class="pl-2"><a href="/?login"><i class="fas fa-sign-in-alt mr-3"></i>Login</a></li>
                    </ul>
                    <!-- alert -->
                    <?php if(isset($_GET['admin'])) { ?>
                    <div class="alert alert-danger" role="alert">
                    Mode : <a href="#" class="alert-link">Gestion</a>
                    </div>
                    <?php } ?>
                </div>
            <!-- </div> -->
            <!-- content -->
            <div class="col-8 main-content pl-5 pr-5"> 
                <?= $content; ?>
            </div>
             <!-- sidebar right -->
            <div class="col-2 sidebar-right d-flex flex-column p-0" style="height:100%;position:relative;">
                <div style="position:fixed;">
                <!-- progress bar -->
                <!-- see : Model/Widget -->
                <?= $widget; ?>
                <!-- card bottom -->
                </div>  
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="text-white row justify-content-center align-items-center position-relative">
        <div>
            <div class="mx-auto font-12">Tous Droits Réservés Baromaire<sup style="font-size:7px"><i class="far fa-copyright text-white"></i></sup> 2021</div>
        </div>
    </footer>
    <script>
        // popover 
        $(function () {
            $('[data-toggle="popover"]').popover('show');
        })
    </script>
    <script src="assets/js/accordeon.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/form.js"></script>
</body>
</html>
