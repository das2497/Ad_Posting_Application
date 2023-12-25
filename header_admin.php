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
                    <a class="navbar-brand d-lg-none" href="adadmin.php">
                        <img src="images/logos/footer-logo.png" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item ">
                                <a class="nav-link " href="adadmin.php">
                                    All Ads
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="adadmin_messages.php">
                                    Messeges
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="adadmin_users.php">
                                    All Users
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="adadmin_users.php">
                                    Banners
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                </a>
                                <div class="dropdown-menu">
                                    <p class="dropdown-item" onclick="lg_out();">Log Out</p>
                                </div>
                            </li>

                        </ul>
                        <div class="nav-search ml-auto d-none d-lg-block">
                            <span id="search">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </nav>

            </div>
        </div>

        <div class="col-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" style="height: 20px;" onkeyup="" id="" placeholder="Type to search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
            </div>
        </div>
        <?php

        // require 'connection.php';

        $rs = Database::search("SELECT * FROM ad_message WHERE admsg_stat='0';");
        if ($rs->num_rows > 0) {
        ?>
            <div class="col-12 text-center my-2">
                <a href="adadmin_messages.php" class="btn btn-outline-success">You Have New Messeges <span class="spinner-grow spinner-grow-sm text-danger" role="status" aria-hidden="true"></span>
            </div></a>
        <?php
        }
        ?>


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