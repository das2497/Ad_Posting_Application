<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- theme meta -->
    <meta name="theme-name" content="newsbit" />
    <title>BEST ADS LK</title>
    <link rel="icon" href="images/logos/logo.png">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        @keyframes blink {
            0% {
                box-shadow: 0 0 20px rgba(255, 59, 59, 0.5);
            }

            50% {
                box-shadow: 0 0 20px rgba(255, 59, 59, 0);
            }

            100% {
                box-shadow: 0 0 20px rgba(255, 59, 59, 0.5);
            }
        }

        .blinking-shadow {
            animation: blink 1s infinite;
            /* Adjust the duration as needed */
        }

        @keyframes btn {
            0% {
                box-shadow: 0 0 20px rgb(255, 140, 90, 0.5);
                background-color: rgb(255, 140, 90, 0.5);
                background: linear-gradient(137deg, rgba(255, 140, 90, 1) 0%, rgba(255, 179, 0, 1) 53%, rgba(255, 239, 0, 1) 100%);
            }

            50% {
                box-shadow: 0 0 20px rgb(255, 140, 90);
                background-color: rgb(255, 140, 90);
                background: linear-gradient(137deg, rgba(255, 140, 90, 1) 0%, rgba(255, 179, 0, 1) 53%, rgba(255, 239, 0, 1) 100%);
            }

            100% {
                box-shadow: 0 0 20px rgb(255, 140, 90, 0.5);
                background-color: rgb(255, 140, 90, 0.5);
                background: linear-gradient(137deg, rgba(255, 140, 90, 1) 0%, rgba(255, 179, 0, 1) 53%, rgba(255, 239, 0, 1) 100%);
            }
        }

        .btn-blinking {
            animation: btn 0.5s infinite;
            /* Adjust the duration as needed */
        }

        .ad {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php require 'header_admin.php'; ?>

    <div class="py-2"></div>

    <section class="featured-posts">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-12">
                    <h4 class="text-center">Admin Pannel</h4>
                </div>

            </div>
            <div class="py-2"></div>

            <div class="row">
                <div class="col-4 offset-4 d-grid">
                    <button class="btn btn-outline-danger">Add New User</button>
                </div>
            </div>
        </div>
    </section>

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget d-lg-none d-none">
                            <h3 class="news-title">
                                <span>Categories</span>
                            </h3>
                            <ul class="list-group">
                                <li class="list-group-item">Personal</li>
                                <li class="list-group-item">Spa</li>
                                <li class="list-group-item">Live Cam</li>
                                <li class="list-group-item">Hotel</li>
                                <li class="list-group-item">Other</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-12">

                    <div class="row  " onclick="admin_message_body();">
                        <div class="col-8">
                            <h4>User</h4>
                        </div>
                        <div class="col-2">
                            <h4>Messege type</h4>
                        </div>
                    </div>


                    <?php
                    for ($x = 0; $x < 20; $x++) {

                    ?>
                        <div class="row border  border-success shadow rounded ad mt-4 " onclick="admin_message_body();">
                            <div class="col-8">
                                <h4><?php echo mb_substr("User Name", 0, 20, 'UTF-8'); ?></h4>
                                <h4><?php echo mb_substr("Mobile Number", 0, 20, 'UTF-8'); ?></h4>
                            </div>
                            <div class="col-2">
                                <span class="badge text-bg-success">Normal</span>
                            </div>
                        </div>

                        <div class="row border  border-success shadow rounded ad mt-4 " onclick="admin_message_body();">
                            <div class="col-8">
                                <h4><?php echo mb_substr("User Name", 0, 20, 'UTF-8'); ?></h4>
                                <h4><?php echo mb_substr("Mobile Number", 0, 20, 'UTF-8'); ?></h4>
                            </div>
                            <div class="col-2">
                                <span class="badge text-bg-danger">Report</span>
                            </div>
                        </div>

                    <?php

                    }
                    ?>


                    <!-- <div class="py-40"></div> -->

                    <hr class="">

                    <nav aria-label="pagination-wrapper" class="pagination-wrapper">
                        <ul class="pagination justify-content-center">
                            <li class="page-item active">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-angle-double-left mr-2"></i></span>
                                    <span class="">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="">Next</span>
                                    <span aria-hidden="true"><i class="fa fa-angle-double-right ml-2"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        </div>
    </section>


    <?php require 'footer.php'; ?>


    <!-- THEME JAVASCRIPT FILES
================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- initialize jQuery Library -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <!-- main js -->
    <script src="js/custom.js"></script>
    <script src="main.js"></script>
</body>

</html>