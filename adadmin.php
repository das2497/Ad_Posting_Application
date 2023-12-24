<?php
session_start();
require 'connection.php';

if (isset($_SESSION['adm'])) {
?>

    <!DOCTYPE html>

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
                    <div class="col-8 offset-2 d-grid">
                        <button class="btn btn-blinking" onclick="user_create_ad();">POST YOUR AD HERE</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="block-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget d-lg-block d-none">
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

                        <!-- VIP -->
                        <!-- <div class="row border border-danger rounded blinking-shadow ad mt-4 " onclick="bdg_body();">
                            <div class="col-4 d-flex flex-column ">
                                <img class="img-fluid d-none d-lg-block" src="images/N-18388479.webp" alt="">
                                <img class="d-block d-lg-none" src="images/N-18388479.webp" alt="" style="width: 120px; height: 120px;">
                                <span class="badge rounded-pill text-primary px-4 py-1" style="font-size: 10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                    </svg>
                                    12k
                                </span>
                            </div>
                            <div class="col-8">
                                <h4 class="d-inline"><?php // echo mb_substr("💦👙Live Cam Show👙💦", 0, 10, 'UTF-8'); 
                                                        ?>...</h4>
                                <span class="badge rounded-pill text-white bg-danger float-right" style="font-size: 16px;"> VIP ⭐ </span>
                                <div class="row">
                                    <div class="col-6 ">
                                        <span class="badge rounded-pill text-white bg-success" style="font-size: 8px;">CASH DIPOSIT GUARANTEE</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="badge rounded-pill text-secondary float-right mt-1" style="font-size: 8px;">22 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                        <?php
                        $rs = Database::search("SELECT *
                        FROM ad_ad
                        INNER JOIN ad_category ON ad_ad.ad_categry=ad_category.adct_id
                        INNER JOIN ad_user ON ad_ad.ad_user_ausr_id=ad_user.ausr_id
                        INNER JOIN ad_badge ON ad_ad.ad_badge_adbg_id=ad_badge.adbg_id 
                        ORDER BY ad_time DESC;");

                        for ($x = 0; $x < $rs->num_rows; $x++) {
                            $d = $rs->fetch_assoc();

                            if ($d['ad_badge_adbg_id'] == 1) {
                        ?>
                                <div class="row border border-primary rounded shadow ad mt-4 " onclick="bdg_body(<?= $d['ad_id']; ?>);">
                                <?php
                            } elseif ($d['ad_badge_adbg_id'] == 2) {
                                ?>
                                    <div class="row border border-warning rounded shadow ad mt-4 " onclick="bdg_body(<?= $d['ad_id']; ?>);">
                                    <?php
                                } elseif ($d['ad_badge_adbg_id'] == 3) {
                                    ?>
                                        <div class="row border border-danger rounded shadow ad mt-4 " onclick="bdg_body(<?= $d['ad_id']; ?>);">
                                        <?php
                                    }

                                    if ($d['ad_stat'] == 0) {
                                        ?>
                                            <span class="badge text-bg-danger">Offline</span>
                                        <?php
                                    }
                                        ?>
                                        <div class="col-4 d-flex flex-column ">
                                            <img class="img-fluid d-none d-lg-block" src="<?= $d['ad_img1'] ?>" alt="">
                                            <img class="d-block d-lg-none" src="<?= $d['ad_img1'] ?>" alt="" style="width: 120px; height: 120px;">
                                            <span class="badge rounded-pill text-primary px-4 py-1" style="font-size: 10px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                                </svg>
                                                12k
                                            </span>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="d-inline"><?php echo mb_substr($d['ad_title'], 0, 9, 'UTF-8'); ?>...</h4>
                                            <?php
                                            if ($d['ad_badge_adbg_id'] == 1) {
                                            ?>

                                            <?php
                                            } elseif ($d['ad_badge_adbg_id'] == 2) {
                                            ?>
                                                <span class="badge rounded-pill text-white bg-warning float-right" style="font-size: 16px;">BEST AD</span>
                                            <?php
                                            } elseif ($d['ad_badge_adbg_id'] == 3) {
                                            ?>
                                                <span class="badge rounded-pill text-white bg-danger float-right" style="font-size: 16px;"> VIP ⭐ </span>

                                            <?php
                                            }
                                            ?>
                                            <h4><?= $d['ausr_uname']; ?></h4>
                                            <h4><?= $d['ausr_contact']; ?></h4>
                                            <div class="row">
                                                <div class="col-6 ">
                                                    <?php
                                                    if ($d['ad_cashback'] == 1) {
                                                    ?>
                                                        <span class="badge rounded-pill text-white bg-success" style="font-size: 8px;">CASH DIPOSIT GUARANTEE</span>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-6">
                                                    <span class="badge rounded-pill text-secondary float-right mt-1" style="font-size: 8px;">22 min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    <?php

                                }
                                    ?>



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

<?php
} else {
    header('Location: signin.php');
}
?>