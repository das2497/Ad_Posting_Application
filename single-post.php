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
                                &nbsp; <?php
                                        // Current date and time
                                        $currentDateTime = new DateTime();

                                        // Calculate the difference
                                        $timeDifference = $currentDateTime->diff(new DateTime($d['ad_time']));

                                        // Get the total number of minutes and hours
                                        $totalMinutes = $timeDifference->i + ($timeDifference->h * 60);
                                        $totalHours = $timeDifference->h + ($timeDifference->days * 24);

                                        // Display the time difference
                                        if ($totalMinutes < 60) {
                                            $agoLabel = "{$totalMinutes} min ago";
                                        } elseif ($totalHours < 24) {
                                            $agoLabel = "{$totalHours} hours ago";
                                        } else {
                                            $totalDays = $timeDifference->days;
                                            $agoLabel = "{$totalDays} days ago";
                                        }
                                        ?>

                                <span><i class="fa fa-clock-o"></i> <?= $agoLabel; ?></span>
                            </p>
                            <p>
                                <button class="btn" onclick="do_like(<?= $d['ad_id']; ?>);"><i class="bi bi-hand-thumbs-up"></i> Like</button>
                                <button class="btn" onclick="share_link();"><i class="bi bi-link-45deg"></i> Copy Link</button>
                            </p>

                            <p>
                                <button class="btn btn-outline-secondary" onclick="myFunction('<?= $d['ad_contact']; ?>')" id="cpnmbr">Copy Number</button>
                            </p>
                            <p>
                                <a class="btn btn-outline-success" href="#" onclick="sendMessage(<?= $d['ausr_contact']; ?>);">
                                    <i class="bi bi-whatsapp"></i> Chat On Whatsapp
                                </a>
                            </p>
                            <p>
                                <a class="btn btn-outline-primary" target="_blank" href="https://t.me/<?= $d['ausr_contact']; ?>">
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
                                <p>
                                    Live cam සේවාව සඳහා cash diposit guarantee සේවාව නියෝජිතයන් හා සම්බන්ධ වී තහවුරු කර ඇත. යම් හෙයකින් එම සේවාව නොලැබුණහොත් ඔබට මුදල් ගෙවනු ඇත. (කොන්දේසි සහිතයි)
                                </p>
                                <p>
                                    Cash diposit guarantee නොවන දැන්වීම් සදහා අපහට කල හැක්කේ එම දැන්වීම පළකල පුද්ගලයාගේ ගිණුම අවලංගු කිරීම සහ දැන්වීම ඉවත් කිරීම පමණි. එම නිසා කරුණාකර ගෙවීම් (බැංකු, ජංගම, ආදිය) ගැන ඉතා සැලකිලිමත් වන්න. අපි සපයන්නේ මාර්ගගත වෙළඳ දැන්වීම් පමණි. ඔබේ ගනුදෙනු සඳහා අපි වගකිව යුතු නොවේ.
                                </p>
                                <p>
                                    Cash diposit guarantee කළ දැන්වීම් ඇතුළුව වෙනත් කිසිදු වෙළඳ දැන්වීමක ප්‍රකාශිත සියලුම ඡායාරූප සඳහා අපි වගකිව යුතු නොවේ.
                                </p>
                                <p>
                                    මෙම මුදල් ආපසු ගැනීම වලංගු වන්නේ " cash diposit Guaranteed" යන කොළ පැහැති ලේබලය සහිත දැන්වීම් සඳහා පමණි.
                                </p>
                            </div>
                            <div class="post-list-block">
                                <p class="text-primary">
                                    භාණ්ඩ සහ සේවා ලබා ගැනීමට පෙර හෝ ගනුදෙනුව තහවුරු වන තුරු මුදල් දීමෙන් වළකින්න. සියලුම ගෙවීම් පිලිබදව සැලකිලිමත් වන්න.

                                    Avoid giving money before receiving Products and services or until the transaction is confirmed. Be careful with all payments.

                                    full service දැන්වීම් සදහා හමුවීමට ප්‍රථම මුදල් ගෙවීමට තරම් මෝඩයෙකු නොවන්න.

                                    Don't be a fool to pay before meeting for full service ads.
                                </p>
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

        function sendMessage(number) {
            // Recipient's phone number (including country code)
            var recipientPhoneNumber = number;

            // Message to be sent
            var message = 'Hello from JavaScript!';

            // URL encode the message
            var encodedMessage = encodeURIComponent(message);

            // Construct the WhatsApp link
            var whatsappLink = 'https://wa.me/' + recipientPhoneNumber + '?text=' + 'මෙම දැන්වීම BEST AD LK වෙබ් අඩවියෙන් ලබා ගතිමි!! \n I got this ad from BEST AD LK website!!';

            // Open the link in a new tab or window
            window.open(whatsappLink, '_blank');
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