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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="page-top">
    <!-- <div id="wrapper">
        <div id="content-wrapper"> -->
    <div class="container-fluid">
        <div id="content" class="header d-none d-md-block">
            <nav class="navbar not-sm">
                <div>
                    <a href="/">
                    <img src="assets/img/icone_m.png" alt="" class="img-fluid px-3 px-sm-6 mt-3 mb-4 logo">
                    </a>
                </div>
                <div class="col-xl-8 col-md-6 mb-4">
                    <a href="/" class="my-auto m-3">
                    <img class="mx-auto logo-baromaire mt-3" src="assets/img/logo_baromaire.png" alt="">
                    </a>
                </div>
            </nav>
        </div>
        <!-- render -->
        <?= $content; ?>
    </div>
        <!-- </div>
    </div> -->
    <!-- footer bottom -> body{} -->
    <footer class="footer d-none d-md-block">
        <div class="container mx-auto my-auto ">
            <ul class="list-group list-group-horizontal   mx-auto justify-content-center">
                <li class="list-group-item-footer"><a href="/principes"> Principes</a></li><span class="ligne">/</span>
                <li class="list-group-item-footer"><a href="/?progres">Démo </a></li><span class="ligne">/</span>
                <li class="list-group-item-footer"><a href="/">Créer votre Baromaire </a></li><span class="ligne">/</span>
                <li class="list-group-item-footer"><a href="/Tarifs"> Tarifs </a></li><span class="ligne">/</span>
                <li class="list-group-item-footer"><a href="/NousContacter">Nous contacter </a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
