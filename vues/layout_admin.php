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
            <div class="card sidebar-left p-0 col" id="sidebar-admin">
                <div class="logo-admin pl-1 pr-1">
                    <a href="/">
                        <img class="" src="assets/img/logo_baromaire_admin.jpg" alt="">
                    </a>
                </div>
                <ul class="sidebar-left_nav">
                    <li class="pl-3 mb-2"><a href="/?admin=dashboard"><i class="fas fa-tachometer-alt mr-3"></i>Tableau de bord</a></li>
                    <li class="pl-3 mb-2"><a href="/?admin=engagement"><i class="fas fa-file-signature mr-3"></i>Engagements</a></li>
                    <li class="pl-3 mb-2"><a href="/?admin=action"><i class="fas fa-cogs mr-3"></i>Domaines d'action</a></li>
                    <li class="pl-3 mb-2"><a href="/?admin=quartier"><i class="fas fa-map-marked-alt mr-3"></i>Quartiers</a></li>
                    <li class="pl-3 mb-2"><a href="/?progres"><i class="fas fa-user mr-3"></i>Utilisateurs</a></li>
                </ul>
            </div>
            <!-- content right -->
            <div class="main-content col p-0 position-relative"> 
                <div class="overlay"></div>
                <!-- navbar top -->
                <nav class="navbar-admin navbar-light bg-light">
                    <div class="row">
                        <div class="col-sm-2 col-6 p-0">
                            <div class="row">
                                <!-- hamburger -->
                                <div class="mx-auto col-sm-6 col-4" id="hamburger-buttons-admin">
                                    <div class="nav-item pointer">
                                        <i class="fas fa-bars nav-link d-block font-18"></i>
                                    </div>
                                </div>
                                <ul class="navbar-nav col-sm-6 col-8">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/?progres">Accueil <span class="sr-only">(current)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- profile button -->
                        <div class="col-sm-10 col-6">
                            <div class="profile-button d-flex justify-content-end pointer">
                                <div class="image image-placeholder img-thumbnail d-block" id="popover-desktop" data-toggle="profile" data-placement="bottom"></div>
                            </div>
                        </div>
                    </div>
                </nav>
                <?php if(isset($breadcrumb)) { ?>
                <nav aria-label="navbar-admin breadcrumb">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                    </ol>
                </nav>
                <?php } ?>
                <!-- content -->
                <div class="col-12">
                    <!-- title -->
                    <h4 class="mb-4 mt-4 w-900 font-30 pt-3 pb-3 text-center"><?= $title ?></h4>
                    <!-- edit alert -->
                    <?php if(isset($alert)) { ?>
                        <div class="alert alert-success mb-4" id="alert-remove" role="alert"><?= $alert ?></div>
                    <?php } ?>
                    <?= $content; ?>
                </div>
                <!-- footer -->
                <footer class="text-black row justify-content-center align-items-center position-absolute">
                    <div>
                        <div class="mx-auto font-12">Tous Droits Réservés Baromaire<sup style="font-size:7px"><i class="far fa-copyright text-black"></i></sup> 2021</div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script>
        // popover 
        $(function () {
            $('#submit-2-disabled').on('click', function(e) {
                e.preventDefault();

                $('[data-toggle="popover-3"]').popover({
                    html:true,
                    title:"Ajouter une action",
                    content: "Avant d'ajouter une action, vous devez ajouter des <a href='/?admin=domaine&redirect'>Domaines d\'action</a>",
                });
            });
            // popover admin profile 
            $('[data-toggle="profile"]').popover({
                html:true,
                content: "<div class='p-2 pl-3 pr-3 pointer' style='border-bottom:1px solid black'><a href='/?admin=profil'>Profil</a></div><div class='p-2 pl-3 pr-3 pointer'><a href='/?admin=logout'>Déconnexion</a></div>",
            });
        })
    </script>
    <script src="assets/js/nav.js"></script>
    <script src="assets/js/accordeon.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/form.js"></script>
</body>
</html>
