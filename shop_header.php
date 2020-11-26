<!-- Bootstrap stylesheet -->
<link href="assets/libs/bootstrap-4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- icofont -->
<link href="assets/libs/icofont/css/icofont.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="assets/libs/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<!-- Animated Headlines css -->
<link href="assets/libs/animated-headlines/animated-headlines.css" rel="stylesheet" type="text/css" />
<!-- mb.YTPlayer css -->
<link href="assets/libs/mb.YTPlayer/css/jquery.mb.YTPlayer.min.css" rel="stylesheet" type="text/css" />
<!-- Switch Style css -->
<link href="assets/switch-style/switch-style.css" rel="stylesheet" type="text/css" />
<!-- Theme Stylesheet -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<!-- Switch Color Style css -->
<link href="#" data-style="styles" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <!-- Loader End -->

        <!--  Header Start  -->
        <header>
            <!--Top Header Start -->
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <ul class="list-inline float-left icon">
                                <li class="list-inline-item"><a href="#"><i class="icofont icofont-phone"></i> Hotline :<?=$shopDetail->phone?></a></li>
                            </ul>
                            <!-- Header Social Start -->
                            <ul class="list-inline float-right icon">
                                <li class="list-inline-item"><a href="shopping-cart.html"><i class="icofont icofont-cart-alt"></i> Cart</a></li>
                                <li class="list-inline-item dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-ui-user"></i> My Account</a>
                                    <ul class="dropdown-menu dropdown-menu-right drophover" aria-labelledby="dropdownMenuLink">
                                        <li class="dropdown-item"><a href="">Login</a></li>
                                        <li class="dropdown-item"><a href="">Register</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item">

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
                            <a href="shop.php?url=<?=$shopDetail->shopUrl?>"><img id="logo_img" class="img-fluid" src="img/logo/<?=$logo->name?>" alt="logo" title="logo" /></a>
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
                                        <li class="nav-item dropdown"><a href="#">HOME</a>

                                        </li>
                                        <li class="nav-item"><a href="#">About us</a></li>

                                        <?php foreach($catDetail as $meun){
    if($meun['parId'] == 0){

                                        ?>

                                        <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$meun['name']?></a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-inner">
                                                    <ul class="list-unstyled">
                                                        <?php foreach($catDetail as $submeun){ 
                                            if($submeun['parId'] == $meun['category_id']){
                                                        ?>
                                                        <li><a href=""><?=$submeun['name']?></a></li>
                                                        <?php }  }?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <?php
    }
}?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Main Menu End -->
                    </div>

                </div>
            </div>
        </header>
        <!-- Header End   -->