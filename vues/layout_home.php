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
<body id="position-relative">
    <div class="container-baromaire">
        <!-- header -->
        <header class="position-relative header_baromaire row align-items-center justify-content-center pt-5 pb-5">
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
    </div>
    <!-- content -->
    <?= $content ?>
    <!-- footer -->
    <footer id="footer-home" class="text-white pb-4 pt-4" style="bottom:0;">
        <div class="f-flex flex-column">
            <nav class="d-flex justify-content-center">
                <!-- nav button xs -->
                <div id="hamburger" class="col-sm-12">
                    <div class="row justify-content-end">
                        <div id="hamburger-button">
                            <div class="mx-auto"></div>
                            <div class="mx-auto"></div>
                            <div class="mx-auto"></div>
                        </div>
                    </div>
                </div>
                <!-- nav sm -> xxl -->
                <ul class="footer-nav pl-0 mb-2 d-flex">
                    <li><a href="" class="white<?php if ($_SERVER['REQUEST_URI']== "/"){ ?> active <?php } ?>">Principes</a></li><span class="ml-sm-3 mr-sm-3 ml-lg-4 mr-lg-4">/</span>
                    <li><a href="" class="white<?php if (isset($_GET['demo'])){ ?> active <?php } ?>">Démo</a></li><span class="ml-sm-3 mr-sm-3 ml-lg-4 mr-lg-4">/</span>
                    <li><a href="" class="white<?php if (isset($_GET['create'])){ ?> active <?php } ?>">Créer votre Baromaire</a></li><span class="ml-sm-3 mr-sm-3 ml-lg-4 mr-lg-4">/</span>
                    <li><a href="" class="white<?php if (isset($_GET['tarifs'])){ ?> active <?php } ?>">Tarifs</a></li><span class="ml-sm-3 mr-sm-3 ml-lg-4 mr-lg-4">/</span>
                    <li><a href="" class="white<?php if (isset($_GET['contact'])){ ?> active <?php } ?>">Nous contacter</a></li>
                </ul>
            </nav>
            <!-- <div class="text-center font-12">Tous Droits Réservés Baromaire<sup style="font-size:7px"><i class="far fa-copyright text-white"></i></sup> 2021</div> -->
        </div>
        <ul class="footer-responsive-nav font-22 d-none pl-0">
            <li class="pt-2 pb-2 pl-4"><a href="" class="white<?php if ($_SERVER['REQUEST_URI']== "/"){ ?> active <?php } ?>">Principes</a></li>
            <li class="pt-2 pb-2 pl-4"><a href="" class="white<?php if (isset($_GET['demo'])){ ?> active <?php } ?>">Démo</a></li>
            <li class="pt-2 pb-2 pl-4"><a href="" class="white<?php if (isset($_GET['create'])){ ?> active <?php } ?>">Créer votre Baromaire</a></li>
            <li class="pt-2 pb-2 pl-4"><a href="" class="white<?php if (isset($_GET['tarifs'])){ ?> active <?php } ?>">Tarifs</a></li>
            <li class="pt-2 pb-2 pl-4"><a href="" class="white<?php if (isset($_GET['contact'])){ ?> active <?php } ?>">Nous contacter</a></li>
        </ul>
        <script src="assets/js/nav.js"></script>
    </footer>
</body>