<?php
if (isset($_SESSION['user']['type'])) {
session_unset();    
session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


    <!-- Mirrored from demo.humatheme.com/boxed-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 17:20:55 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots" content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



    </head>

    <body class="layout-boxed layout-sticky-subnav ">




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


                    <!-- Navbar Brand -->


                    <!-- <button class="btn navbar-btn mr-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->


                    <div class="flex"></div>


                </div>

                <!-- // END Header -->

                <div class=" pt-32pt pt-sm-64pt pb-32pt">
                    <div class="container-fluid page__container">
                        <form id="logincheck" action="" class="col-md-5 p-0 mx-auto">
                            <div class="form-group">
                                <label class="form-label" for="email">Email:</label>
                                <input id="username" name="loginEmail" type="temail" class="form-control" placeholder="Your Username ...">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password:</label>
                                <input id="password" type="password" name="password" class="form-control" placeholder="Your Password ...">

                            </div>
                            <div class="text-center">
                                <button class="btn btn-lg btn-accent" onclick="" type="submit"\>Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-group col-12 col-md-12">
                    <div class="">

                        <div id="emailError" class="alert alert-danger" role="alert" style="display: none;">
                            <div class="alert-text">Email Or Password is Incorrect <br> Try again later.</div>
                        </div>

                    </div>
                </div>
                <div class="page-separator justify-content-center m-0">
                    <div class="page-separator__text">Link to World</div>
                    <div class="page-separator__bg-top "></div>
                </div>





                <div class="js-fix-footer footer border-top-2">
                    <div class="container-fluid page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon" src="" width="100" alt="">
                        </p>
                        <p class="measure-lead-max text-muted mb-0 small">Interface for modern Business Admin Web Applications.</p>
                    </div>
                    <div class="pb-16pt pb-lg-24pt">
                        <div class="container-fluid page__container">
                            <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                                <div class="row">
                                    <div class="col-md-6 col-sm-4 mb-24pt mb-md-0">
                                        <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                                        <nav class="nav nav-links nav--flush">
                                            <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square%402x.png" width="24" height="24" alt="Facebook"></a>
                                            <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/twitter-square%402x.png" width="24" height="24" alt="Twitter"></a>
                                            <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/vimeo-square%402x.png" width="24" height="24" alt="Vimeo"></a>
                                            <!-- <a href="#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a> -->
                                        </nav>
                                    </div>

                                    <div class="col-md-6 text-md-right">
                                        <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                                            <a href="#" class="text-white-70 text-underline mr-16pt">Terms</a>
                                            <a href="#" class="text-white-70 text-underline">Privacy policy</a>
                                        </p>
                                        <p class="text-white-50 small mb-0">Copyright 2020 &copy; All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- // END drawer-layout__content -->




        </div>
        <!-- // END drawer-layout -->

        <!-- App Settings FAB -->

        <!-- Modal -->


        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="assets/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- Fix Footer -->
        <script src="assets/vendor/fix-footer.js"></script>

        <!-- Chart.js -->
        <script src="assets/vendor/Chart.min.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>
        <script src="../assets/js/custom.js"></script>


    </body>


</html>