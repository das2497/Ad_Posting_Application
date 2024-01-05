<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewsBit - News Magazine Newspaper HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    require 'header_n_admin.php';

    require 'connection.php';

    $rs = Database::search("SELECT *
    FROM ad_ad
    INNER JOIN ad_category ON ad_ad.ad_categry=ad_category.adct_id
    INNER JOIN ad_user ON ad_ad.ad_user_ausr_id=ad_user.ausr_id
    INNER JOIN ad_badge ON ad_ad.ad_badge_adbg_id=ad_badge.adbg_id
    WHERE ad_ad.ad_id='" . $_GET['ad_id'] . "';");

    $d = $rs->fetch_assoc();
    ?>


    <section class="mt-4">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="login">

                        <h3 class="">User Settings</h3>
                        <button class="btn btn-primary w-100 my-2" onclick="user_republish(<?= $_GET['ad_id'] ?>);">RePublish</button>

                        <div class="login-form row mt-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="usr_badge">Selsect Badge</label>
                                    <select class="form-select" id="usr_badge">
                                        <option value="1">Normal</option>
                                        <option value="2">Best Ad</option>
                                        <option value="3">VIP</option>
                                        <option value="4">Banner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="usr_stat">Select Status</label>
                                    <select class="form-select" id="usr_stat">
                                        <option value="1">Online</option>
                                        <option value="0">Ofline</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="usr_cashback">CashBack Badge</label>
                                    <select class="form-select" id="usr_cashback">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" onclick="user_setup(<?= $_GET['ad_id'] ?>);">Update</button>
                                <a class="btn btn-dark" href="adadmin.php">Go Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="signup">
                        <div class="signup-form row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <img class="img-fluid m-1" src="<?= $d['ad_img1']; ?>" width="100">
                                        <?php
                                        if ($d['ad_img2'] != '') {
                                        ?>
                                            <img src="<?= $d['ad_img2']; ?>" class="img-fluid m-1" alt="featured-image">
                                        <?php
                                        }
                                        if ($d['ad_img3'] != '') {
                                        ?>
                                            <img src="<?= $d['ad_img3']; ?>" class="img-fluid m-1" alt="featured-image">
                                        <?php
                                        }
                                        if ($d['ad_img4'] != '') {
                                        ?>
                                            <img src="<?= $d['ad_img4']; ?>" class="img-fluid m-1" alt="featured-image">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ad_img_1">Image 1</label>
                                    <input type="file" class="form-control" id="ad_img_1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ad_img_2">Image 2</label>
                                    <input type="file" class="form-control" id="ad_img_2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ad_img_3">Image 3</label>
                                    <input type="file" class="form-control" id="ad_img_3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ad_img_4">Image 4</label>
                                    <input type="file" class="form-control" id="ad_img_4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ad_title">Title</label>
                                    <input type="text" class="form-control" id="ad_title" placeholder="Title" value="<?php echo $d['ad_title']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ad_mobile">Your Mobile Number</label>
                                    <input type="text" id="ad_mobile" class="form-control" placeholder="Your Mobile Number" value="<?php echo $d['ad_contact']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ad_category">Contact Type</label>
                                <select class="form-select" id="ad_mobile_type">
                                    <option value="x">Select</option>
                                    <option value="1">Call Whatsapp Teligram</option>
                                    <option value="2">Call Whatsapp</option>
                                    <option value="3">Call Teligram</option>
                                    <option value="4">Whatsapp Teligram</option>
                                    <option value="5">Call</option>
                                    <option value="6">Whatsapp</option>
                                    <option value="7">Teligram</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ad_location">Location</label>
                                    <input type="password" class="form-control" id="ad_location" placeholder="Location" value="<?php echo $d['ad_location']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ad_category">Catogery</label>
                                <select class="form-select" id="ad_category">
                                    <option value="x">Select</option>
                                    <option value="1">Personal</option>
                                    <option value="1">Spa</option>
                                    <option value="1">Live Cam</option>
                                    <option value="1">Hotel</option>
                                    <option value="1">Other</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ad_description">Description</label>
                                    <textarea class="form-control" cols="30" rows="40" placeholder="Description" id="ad_description"><?php echo $d['ad_descrip']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <button class="btn btn-primary" onclick="update_ad(<?= $_GET['ad_id'] ?>);">Update Ad</button>
                            <a class="btn btn-dark mt-2" href="adadmin.php">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
</body>

</html>