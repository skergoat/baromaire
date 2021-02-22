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
    <div class="container-baromaire-fluid p-0">
        <div class="row pt-0">
            <!-- sidebar left -->
            <div class="card sidebar-left p-0 col-2 d-none d-sm-none d-lg-block">
                <div class="logo-admin pl-1 pr-1">
                    <a href="/">
                        <img class="" src="assets/img/logo_baromaire.png" alt="">
                    </a>
                </div>
                <ul class="sidebar-left_nav">
                    <li class="pl-2 mb-2"><a href="/?admin=dashboard"><i class="fas fa-tachometer-alt mr-3"></i>Tableau de bord</a></li>
                    <li class="pl-2 mb-2"><a href="/?admin=engagement"><i class="fas fa-file-signature mr-3"></i>Engagements</a></li>
                    <li class="pl-2 mb-2"><a href="/?admin=action"><i class="fas fa-cogs mr-3"></i>Domaines d'action</a></li>
                    <li class="pl-2 mb-2"><a href="/?admin=quartier"><i class="fas fa-map-marked-alt mr-3"></i>Quartiers</a></li>
                    <li class="pl-2 mb-2"><a href="/?progres"><i class="fas fa-user mr-3"></i>Utilisateurs</a></li>
                </ul>
            </div>
            <!-- content right -->
            <div class="main-content col-sm-12 col-lg-10 p-0 position-relative"> 
                <!-- navbar top -->
                <nav class="navbar-admin navbar-light bg-light">
                    <div class="row">
                        <div class="col-2 b-blue p-0">
                            <div class="row">
                                <!-- hamburger -->
                                <div class="mx-auto b-blue col-6" id="hamburger-buttons">
                                    <div class="nav-item">
                                        <i class="fas fa-bars nav-link"></i>
                                    </div>
                                </div>
                                <ul class="navbar-nav b-red col-6">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/?progres">Accueil <span class="sr-only">(current)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- profile button -->
                        <div class="col-10 b-red">
                            <div class="profile-button">
                                PROFILE
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- content -->
                <div class="col-12">
                    <?= $content; ?>
                </div>
                <!-- footer -->
                <footer class="text-white row justify-content-center align-items-center position-absolute">
                    <div>
                        <div class="mx-auto font-12">Tous Droits Réservés Baromaire<sup style="font-size:7px"><i class="far fa-copyright text-white"></i></sup> 2021</div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script>
        // popover 
        $(function () {
            $('[data-toggle="popover"]').popover('show');
            $('[data-toggle="popover-2"]').popover();
            $('#submit-2-disabled').on('click', function(e) {
                e.preventDefault();

                $('[data-toggle="popover-3"]').popover({
                    html:true,
                    title:"Ajouter une action",
                    content: "Avant d'ajouter une action, vous devez ajouter des <a href='/?admin=domaine&redirect'>Domaines d\'action</a>",
                });
            });
        })
    </script>
    <script src="assets/js/nav.js"></script>
    <script src="assets/js/accordeon.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/form.js"></script>
</body>
</html>
