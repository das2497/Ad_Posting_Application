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

    <?php
    require 'header_n_admin.php';
    ?>

    <div class="py-2"></div>

    <section class="featured-posts">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-12">
                    <h4 class="text-center">Admin Pannel All Messeges</h4>
                </div>

            </div>
            <div class="py-2"></div>

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


                    <?php
                    require 'connection.php';

                    $rs = Database::search("SELECT * FROM ad_message
                                    INNER JOIN ad_msg_type ON ad_message.admsg_type=ad_msg_type.admsgt_id;");

                    Database::search("UPDATE ad_message SET admsg_stat='1';");

                    for ($x = 0; $x < $rs->num_rows; $x++) {
                        $d = $rs->fetch_assoc();
                    ?>
                        <div class="row border  border-success shadow rounded ad mt-4 " onclick="copy_number('<?php echo mb_substr($d['admsg_contact'], 0, 20, 'UTF-8'); ?>');">
                            <div class="col-12">
                                <h4><?php echo mb_substr($d['admsg_name'], 0, 20, 'UTF-8'); ?></h4>
                                <h4><?php echo mb_substr($d['admsg_contact'], 0, 20, 'UTF-8'); ?></h4>
                                <h4><?php echo $d['admsgt_type']; ?></h4>
                            </div>
                        </div>

                    <?php

                    }
                    ?>



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
    <script>
        function copy_number(number) {
            // alert(number);
            // Create a temporary input element
            var tempInput = document.createElement('input');

            // Set its value to the current page URL
            tempInput.value = number;

            // Append it to the document
            document.body.appendChild(tempInput);

            // Select the content of the input
            tempInput.select();

            // Execute the copy command
            document.execCommand('copy');

            // Remove the temporary input element
            document.body.removeChild(tempInput);

            // Notify the user
            alert('Number Copied!');
        }
    </script>
</body>

</html>