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
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- custom style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body id="position-relative">
    <div class="container-baromaire mb-5">
        <!-- header -->
        <header class="position-relative header_baromaire row align-items-center justify-content-center pt-5 pb-5">
            <div class="position-absolute pl-5" style="width:100%">
                <a href="/">
                    <img class="logo-left" src="assets/img/icone_m.png" alt="">
                </a>
            </div>
            <div>
                <a href="/">
                    <img class="logo-home" src="assets/img/logo_baromaire.png" alt="">
                </a>
            </div>
        </header>
    </div>
    <?= $content ?>
    <footer class="text-white pb-4 pt-4" style="bottom:0;">
        <div class="f-flex flex-column">
            <nav class="d-flex justify-content-center">
                <ul class="footer-nav pl-0 mb-2 d-flex font-22">
                    <li><a href="" class="white<?php if ($_SERVER['REQUEST_URI']== "/"){ ?> active <?php } ?>">Principes</a></li><span class="ml-4 mr-4">/</span>
                    <li><a href="" class="white<?php if (isset($_GET['demo'])){ ?> active <?php } ?>">Démo</a></li><span class="ml-4 mr-4">/</span>
                    <li><a href="" class="white<?php if (isset($_GET['create'])){ ?> active <?php } ?>">Créer votre Baromaire</a></li><span class="ml-4 mr-4">/</span>
                    <li><a href="" class="white<?php if (isset($_GET['tarifs'])){ ?> active <?php } ?>">Tarifs</a></li><span class="ml-4 mr-4">/</span>
                    <li><a href="" class="white<?php if (isset($_GET['contact'])){ ?> active <?php } ?>">Nous contacter</a></li>
                </ul>
            </nav>
            <!-- <div class="text-center font-12">Tous Droits Réservés Baromaire<sup style="font-size:7px"><i class="far fa-copyright text-white"></i></sup> 2021</div> -->
        </div>
    </footer>
</body>