<?php 
/***
 * Layout : Frontend
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/jpg" href="assets/img/favicon.png">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1596c4b58a.js" crossorigin="anonymous"></script>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- my styles -->
    <link rel="stylesheet" href="assets/css/baromaire_home/style.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <!-- bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- progress bar js -->
    <script>$class = ".progresses";</script>
    <script src="assets/js/progress_bar.js"></script>
</head>
<body>
    <!-- container / height 100vh -->
    <div class="position-relative pt-4 container-baromaire <?php if(isset($_GET['tarifs']) || isset($_GET['principes']) || isset($_GET['create_baromaire'])) { ?>container-baromaire-higher<?php } ?>">
        <div class="col-11 mx-auto" id="wrapper">
            <!-- header -->
            <header class="position-relative header_baromaire row align-items-center justify-content-center">
                <div class="position-absolute pl-5" style="width:100%">
                    <a href="/">
                        <img class="logo-left d-sm-none d-lg-block" src="assets/img/icone_m.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="/">
                        <img class="logo-home" src="assets/img/logo_baromaire.png" alt="">
                    </a>
                </div>
            </header>
            <!-- content -->
            <?= $content ?>
        <!-- footer -->
        </div>
        <footer id="footer-home" class="text-white pb-0 pb-md-3 pt-0 pt-md-3 <?php if (isset($_GET['contact']) || $_SERVER['REQUEST_URI'] == "/"){ ?> footer-absolute <?php } ?>">
            <div class="f-flex flex-column">
                <nav class="d-flex justify-content-center">
                    <!-- nav button xs -->
                    <div id="hamburger" class="col-sm-12">
                        <div class="row justify-content-end">
                            <div id="hamburger-button">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                    <!-- nav sm -> xxl -->
                    <ul class="footer-nav pl-0 mb-2 d-flex">
                        <li><a href="/?principes" class="white<?php if (isset($_GET['principes'])){ ?> active <?php } ?>">Principes</a></li><span class="ml-sm-3 mr-sm-3 ml-lg-4 mr-lg-4">/</span>
                        <li><a href="#" class="white<?php if (isset($_GET['demo'])){ ?> active <?php } ?>">Démo</a></li><span class="ml-sm-3 mr-sm-3 ml-lg-4 mr-lg-4">/</span>
                        <li><a href="/?create_baromaire" class="white<?php if (isset($_GET['create_baromaire'])){ ?> active <?php } ?>">Créer votre Baromaire</a></li><span class="ml-sm-3 mr-sm-3 ml-lg-4 mr-lg-4">/</span>
                        <li><a href="/?tarifs" class="white<?php if (isset($_GET['tarifs'])){ ?> active <?php } ?>">Tarifs</a></li><span class="ml-sm-3 mr-sm-3 ml-lg-4 mr-lg-4">/</span>
                        <li><a href="/?contact" class="white<?php if (isset($_GET['contact'])){ ?> active <?php } ?>">Nous contacter</a></li>
                    </ul>
                </nav>
            </div>
            <ul class="footer-responsive-nav font-22 d-none pl-0">
                <li class=""><a href="/?principes" class="white li-a pt-2 pb-2 pl-4 <?php if (isset($_GET['principes'])){ ?> active <?php } ?>">Principes</a></li>
                <li class=""><a href="#" class="white li-a  pt-2 pb-2 pl-4 <?php if (isset($_GET['demo'])){ ?> active <?php } ?>">Démo</a></li>
                <li class=""><a href="/?create_baromaire" class="white li-a  pt-2 pb-2 pl-4 <?php if (isset($_GET['create_baromaire'])){ ?> active <?php } ?>">Créer votre Baromaire</a></li>
                <li class=""><a href="/?tarifs" class="white pt-2 li-a  pb-2 pl-4 <?php if (isset($_GET['tarifs'])){ ?> active <?php } ?>">Tarifs</a></li>
                <li class=""><a href="/?contact" class="white pt-2 li-a pb-2 pl-4 <?php if (isset($_GET['contact'])){ ?> active <?php } ?>">Nous contacter</a></li>
            </ul>
            <script src="assets/js/nav.js"></script>
        </footer>
    </div>
</body>