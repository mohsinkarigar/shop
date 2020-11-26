<?php 
require_once('../func.php');
if (!isset($_SESSION['user']['type'])) {
    header('Location: login.php');  
}
else{
    if (time() - $_SESSION['user']['create_time'] > 86400) {

        session_unset();    
        session_destroy(); 
        header('Location: login.php');  
    }
}
?>
    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">

  
    <!-- Perfect Scrollbar -->
    <link type="text/css" href="<?=$root?>assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="assets/vendor/fix-footer.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="assets/css/preloader.css" rel="stylesheet">
    <link type="text/css" href="assets/css/preloader.rtl.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Dark Mode CSS (optional) -->
    <link type="text/css" href="assets/css/dark-mode.css" rel="stylesheet">
    <link type="text/css" href="assets/css/dark-mode.rtl.css" rel="stylesheet">


    <!-- Flatpickr -->
    <link type="text/css" href="assets/css/flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- DateRangePicker -->
    <link type="text/css" href="assets/vendor/daterangepicker.css" rel="stylesheet">

    <!-- Quill Theme -->
    <link type="text/css" href="assets/css/quill.css" rel="stylesheet">
    <link type="text/css" href="assets/css/quill.rtl.css" rel="stylesheet">

    <!-- Touchspin -->
    <link type="text/css" href="assets/css/bootstrap-touchspin.css" rel="stylesheet">
    <link type="text/css" href="assets/css/bootstrap-touchspin.rtl.css" rel="stylesheet">

    <!-- Select2 -->
    <link type="text/css" href="assets/css/select2.css" rel="stylesheet">
    <link type="text/css" href="assets/css/select2.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/vendor/select2/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sweetalert.css">


</head>

<body class="layout-compact layout-sticky-subnav layout-compact">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">

            <!-- Header -->





            <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body" id="default-navbar" data-primary>

                <!-- Navbar toggler -->
                <button class="navbar-toggler d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
                    <span class="material-icons">menu</span>
                </button>

                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand mr-16pt">
                    <img class="navbar-brand-icon mr-0 mr-lg-8pt" src="assets/images/logo/accent-teal-100%402x.png" width="32" alt="Huma">
                    <span class="d-none d-lg-block">Panel</span>
                </a>

                <!-- <button class="btn navbar-btn mr-16pt ml-md-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->


           


                <div class="flex"></div>

               <?php $userDetail = getUser($_SESSION['user']['user_id']); ?>

                <div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
                    <div class="nav-item dropdown d-none d-sm-flex">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                            <img width="32" height="32" class="rounded-circle mr-8pt" src="assets/images/people/50/guy-3.jpg" alt="account" />
                            <span class="flex d-flex flex-column mr-8pt">
                                <span class="navbar-text-100"><?=$userDetail->name?></span>
                                <small class="navbar-text-50"><?=$userDetail->type?></small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="about.php">About Us</a>
                            <a class="dropdown-item" href="login.php">Logout</a>
                        </div>
                    </div>


          


                </div>

          
            </div>