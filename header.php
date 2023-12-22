<?php
// session_start();
?>

<header class="header-navigation d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logos/logo.png" alt=""> <!-- Replace Logo Here -->
                    </a>
                </div>
                <!-- End Logo -->
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <div class="top-ad-banner float-right">
                    <a href="#">
                        <img src="images/news/ad-pro.png" class="img-fluid" alt="banner-ads">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main-navbar clearfix bg-dark ">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg site-main-nav navigation">
                    <a class="navbar-brand d-lg-none" href="index.php">
                        <img src="images/logos/footer-logo.png" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item ">
                                <a class="nav-link " href="index.php">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown d-lg-none d-block">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categories
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php">Personal</a>
                                    <a class="dropdown-item" href="index.php">Spa</a>
                                    <a class="dropdown-item" href="index.php">Live Cam</a>
                                    <a class="dropdown-item" href="index.php">Hotel</a>
                                    <a class="dropdown-item" href="index.php">Other</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About Us
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="terms.php">Terms</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                </a>
                                <div class="dropdown-menu">
                                    <?php
                                    if (isset($_SESSION['usr'])) {
                                    ?>
                                        <p class="dropdown-item" onclick="lg_out();">Log Out</p>
                                    <?php
                                    } else {
                                    ?>
                                        <a class="dropdown-item" href="signin.php">Log In</a>
                                        <a class="dropdown-item" href="signup.php">Register</a>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </li>

                        </ul>

                    </div>
                </nav>

            </div>
        </div>

    </div>
    <form class="site-search" method="get">
        <input type="text" id="searchInput" name="site_search" placeholder="Enter Keyword Here..." autofocus="">
        <div class="search-close">
            <span class="close-search">
                <i class="fa fa-times"></i>
            </span>
        </div>
    </form>
</div>