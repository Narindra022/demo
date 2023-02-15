<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Application de gestion d'une universite">
    <meta name="robots" content="noindex,nofollow">
    <title>GestionUniversite</title>
    <link rel="canonical" href="<?= base_url() ?>/https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/<plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?= base_url() ?>/dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url() ?>/plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?= base_url() ?>/plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="<?= base_url() ?>/javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li>
                            <a class="profile-pic" href="<?= base_url() ?>/#">
                                <img src="<?= base_url() ?>/plugins/images/users/utilisateur.png" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">Gadnyz</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>Home/accueil" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Accueil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>Home/etudiant" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Etudiant</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>Home/promotion" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Promotion</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Accueil</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Etudiant</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <img src="<?php base_url() ?>/plugins/images/etudiant.png" alt="" width="50px">
                                </li>
                                <li class="ms-auto"><span class="counter text-success">7</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Promotion</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <img src="<?php base_url() ?>/plugins/images/promotion.png" alt="" width="50px">
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">

                                        <?php
                                        if (isset($total_promotions)) {
                                            echo $total_promotions;
                                        } else
                                            echo 0;

                                        ?>
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center"> 2021 © GestionUniversite</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/js/app-style-switcher.js"></script>
    <script src="<?= base_url() ?>/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?= base_url() ?>/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url() ?>/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url() ?>/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>