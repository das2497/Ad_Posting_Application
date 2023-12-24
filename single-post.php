<?php
session_start();
require 'connection.php';

$rs = Database::search("SELECT *
    FROM ad_ad
    INNER JOIN ad_category ON ad_ad.ad_categry=ad_category.adct_id
    INNER JOIN ad_user ON ad_ad.ad_user_ausr_id=ad_user.ausr_id
    INNER JOIN ad_badge ON ad_ad.ad_badge_adbg_id=ad_badge.adbg_id
    WHERE ad_id='" . $_GET['ad_id'] . "';");

$d = $rs->fetch_assoc();
?>

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

    <!--Favicon-->
    <link rel="icon" href="images/logos/logo.png">

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .wm {
            background: rgba(255, 255, 255, 0.9) url('images/vip_watermark.png') repeat;
        }
    </style>
</head>

<body>

    <?php require 'header.php'; ?>

    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-post">
                        <div class="post-header mb-5">
                            <a class="post-category" href="post-category-1.html"><?= $d['adct_cat']; ?></a>
                        </div>
                        <div class="post-body">
                            <div class="post-featured-image">
                                <img src="<?= $d['ad_img1']; ?>" class="img-fluid" alt="featured-image">
                                <?php
                                if ($d['ad_img2'] != '') {
                                ?>
                                    <img src="<?= $d['ad_img2']; ?>" class="img-fluid mt-1" alt="featured-image">
                                <?php
                                }
                                if ($d['ad_img3'] != '') {
                                ?>
                                    <img src="<?= $d['ad_img3']; ?>" class="img-fluid mt-1" alt="featured-image">
                                <?php
                                }
                                if ($d['ad_img4'] != '') {
                                ?>
                                    <img src="<?= $d['ad_img4']; ?>" class="img-fluid mt-1" alt="featured-image">
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget">
                            <h4 class="">
                                <?= $d['ad_title']; ?>
                            </h4>
                            <p style="font-size: 12px;">
                                <span><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?= $d['ad_location']; ?></span>
                                &nbsp; |&nbsp;
                                <span><?= $d['adct_cat']; ?></span>&nbsp;
                                |&nbsp;
                                &nbsp;<span><i class="fa fa-clock-o"></i> 13 minutes ago</span>
                            </p>
                            <p>
                                <button class="btn"><i class="bi bi-hand-thumbs-up"></i> Like</button>
                                <button class="btn"><i class="bi bi-heart"></i> Save</button>
                                <button class="btn" onclick="share_link();"><i class="bi bi-link-45deg"></i> Copy Link</button>
                            </p>

                            <p>
                                <button class="btn btn-outline-secondary" onclick="myFunction('<?= $d['ad_contact']; ?>')" id="cpnmbr">Copy Number</button>
                            </p>
                            <p>
                                <a class="btn btn-outline-success" href="https://wa.me/<?= $d['ausr_contact']; ?>">
                                    <i class="bi bi-whatsapp"></i> Chat On Whatsapp
                                </a>
                            </p>
                            <p>
                                <a class="btn btn-outline-primary" href="https://te.me/<?= $d['ausr_contact']; ?>">
                                    <i class="bi bi-send-fill"></i> Chat On Teligram
                                </a>
                            </p>
                        </div>

                        <div class="widget">
                            <div class="post-list-block">
                                <?php
                                if ($d['ad_badge_adbg_id'] == 3) {
                                ?>
                                    <p class="wm">
                                    <?php
                                } else {
                                    ?>
                                    <p>
                                    <?php
                                }
                                    ?>
                                    <?php
                                    echo nl2br($d['ad_descrip']);
                                    ?>
                                    </p>
                            </div>
                        </div>
                        <hr>
                        <div class="widget">
                            <h4 class="">
                                <button class="btn btn-outline-success">Complains (දැන්වීම සම්බන්ද පැමිණිලි)</button>
                            </h4>

                            <div class="post-list-block">
                                <p>Before making the payment, please check below whether the bank account numbers, Ez cash or M cash numbers given to you are identified as fake accounts.</p>

                                <p>මුදල් ගෙවීමට පෙර, කරුණාකර ඔබට ලබාදෙන බැංකු ගිණුම් අංක, Ez cash හෝ M cash අංක ව්‍යාජ ගිණුම් ලෙස හඳුනාගෙන තිබේදැයි පහතින් පරීක්ෂා කරන්න.</p>

                                <p>பணம் செலுத்தும் முன், உங்களுக்கு வழங்கப்பட்ட வங்கிக் கணக்கு எண்கள், Ez Cash அல்லது M Cash எண்கள் போலி கணக்குகள் என அடையாளம் காணப்பட்டுள்ளதா என்பதை கீழே சரிபார்க்கவும்.</p>
                            </div>
                            <div class="post-list-block">
                                <p class="text-primary">
                                    භාණ්ඩ සහ සේවා ලබා ගැනීමට පෙර හෝ ගනුදෙනුව තහවුරු වන තුරු මුදල් දීමෙන් වළකින්න. සියලුම ගෙවීම් පිලිබදව සැලකිලිමත් වන්න.

                                    Avoid giving money before receiving Products and services or until the transaction is confirmed. Be careful with all payments.

                                    full service දැන්වීම් සදහා හමුවීමට ප්‍රථම මුදල් ගෙවීමට තරම් මෝඩයෙකු නොවන්න.

                                    Don't be a fool to pay before meeting for full service ads.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php require 'footer.php'; ?>


    <!-- THEME JAVASCRIPT FILES
================================================== -->
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
        function myFunction(number) {
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

        function share_link() {

            // Create a temporary input element
            var tempInput = document.createElement('input');

            // Set its value to the current page URL
            tempInput.value = document.location.href;

            // Append it to the document
            document.body.appendChild(tempInput);

            // Select the content of the input
            tempInput.select();

            // Execute the copy command
            document.execCommand('copy');

            // Remove the temporary input element
            document.body.removeChild(tempInput);

            // Notify the user
            alert('Link Copied!');
        }

        // function share_link() {
        //     if (navigator.clipboard) {
        //         navigator.clipboard.writeText(window.location.href)
        //             .then(function() {
        //                 alert('Link Copied!');
        //             })
        //             .catch(function(err) {
        //                 console.error('Unable to copy text to clipboard', err);
        //             });
        //     } else {
        //         // Fallback for browsers that don't support the Clipboard API
        //         // You can provide an alternative method here, such as creating a text input and selecting its value
        //         console.warn('Clipboard API not supported. Please copy the link manually.');
        //     }
        // }
    </script>
</body>

</html>