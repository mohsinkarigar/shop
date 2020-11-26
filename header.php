<?php require_once('func.php') ?>
        <!-- Bootstrap stylesheet -->

         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link href="assets/libs/bootstrap-4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- icofont -->
        <link href="assets/libs/icofont/css/icofont.css" rel="stylesheet" type="text/css" />
        <!-- crousel css -->
        <link href="assets/libs/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <!-- mb.YTPlayer css -->
        <link href="assets/libs/mb.YTPlayer/css/jquery.mb.YTPlayer.min.css" rel="stylesheet" type="text/css" />
        <!-- Switch Style css -->
        <link href="assets/switch-style/switch-style.css" rel="stylesheet" type="text/css"/>
        <!-- Theme Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <!-- Switch Color Style css -->
        <link href="#" data-style="styles" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">

            <!-- Loader Start -->
<!--
            <div class="loader">
                <div class="loader-inner">
                    <h4>Cooking in progress..</h4>
                    <div id="cooking">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div id="area">
                            <div id="sides">
                                <div id="pan"></div>
                                <div id="handle"></div>
                            </div>
                            <div id="pancake">
                                <div id="pastry"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->
            <!-- Loader End -->

            <!--  Header Start  -->
            <header>
                <!--Top Header Start -->
                <div class="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <ul class="list-inline float-left icon">
                                    <li class="list-inline-item"><a href="#"><i class="icofont icofont-phone"></i> Hotline : 123 456 7890</a></li>
                                </ul>
                                <!-- Header Social Start -->
                                <ul class="list-inline float-right icon">
                                    <li class="list-inline-item"><a href="shopping-cart.html"><i class="icofont icofont-cart-alt"></i> Cart</a></li>
                                    <li class="list-inline-item dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-ui-user"></i> My Account</a>
                                        <ul class="dropdown-menu dropdown-menu-right drophover" aria-labelledby="dropdownMenuLink">
                                            <li class="dropdown-item"><a href="login.html">Login</a></li>
                                            <li class="dropdown-item"><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>
                           
                                </ul>
                                <!-- Header Social End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Top Header End -->

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <!-- Logo Start  -->
                            <div id="logo">
                                <a href="index.html"><img id="logo_img" class="img-fluid" src="assets/images/logo/logo.png" alt="logo" title="logo" /></a>
                            </div>
                            <!-- Logo End  -->
                        </div>

                        <div class="col-md-7 col-sm-6 col-12 paddleft">
                            <!-- Main Menu Start  -->
                            <div id="menu">	
                                <nav class="navbar navbar-expand-md">
                                    <div class="navbar-header">
                                        <span class="menutext d-block d-md-none">Menu</span>
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggler" type="button"><i class="icofont icofont-navigation-menu"></i></button>
                                    </div>
                                    <div class="collapse navbar-collapse navbar-ex1-collapse padd0">
                                        <ul class="nav navbar-nav">
                                            <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="index-1.html">Home Page One</a></li>
                                                            <li><a href="index-2.html">Home page Two</a></li>
                                                            <li><a href="index-3.html">home page Three</a></li>
                                                            <li><a href="index-onepage.html">One Page</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="about.html">about us</a></li>
                                            <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Menu</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="menu.html">Menu Options 1</a></li>
                                                            <li><a href="menu-2.html">Menu Options 2</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="reservation.html">Reservation</a></li>
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="shop-details.html">Shop Details</a></li>
                                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                            <li><a href="search.html">Search</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="register.html">Register</a></li>
                                                            <li><a href="forgot-password.html">Forgot Password</a></li>
                                                            <li><a href="thank-you.html">Thank You</a></li>
                                                            <li><a href="404.html">404</a></li>
                                                            <li><a href="dashboard.html">Dashboard</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Blog</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="blog.html">Blog list 1</a></li>
                                                            <li><a href="blog-2.html">Blog list 2</a></li>
                                                            <li><a href="blog-details.html">Blog Detail 1</a></li>
                                                            <li><a href="blog-details-2.html">Blog Detail 2</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">contact us</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="contact-us.html">contact us 1</a></li>
                                                            <li><a href="contact-us-2.html">contact us 2</a></li>
                                                            <li><a href="contact-us-3.html">contact us 3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Main Menu End -->
                        </div>
                        <div class="col-md-2 col-sm-12 col-12 button-top paddleft">
                            <a class="btn-primary btn" href='page.php?CreateRestaurants'>Restautants</a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header End   -->