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
    <title>NewsBit - News Magazine Newspaper HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/logos/logo.png">
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
</head>

<body>

    <!-- <section class="login-signup section-padding"> -->
    <div class="container">
        <div class="row align-items-center justify-content-center mt-4">
            <div class="col-lg-7">
                <div class="signup">
                    <div class="text-center"><a href="index.php"><img src="images/logos/logo.png" alt="" class="img-fluid"></a></div>
                    <h3 class="mt-4">Create Your Ad</h3>
                    <div class="signup-form row">
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
                                <input type="text" class="form-control" id="ad_title" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ad_mobile">Your Mobile Number</label>
                                <input type="text" id="ad_mobile" class="form-control" placeholder="Your Mobile Number">
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
                                <input type="password" class="form-control" id="ad_location" placeholder="Location">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ad_category">Catogery</label>
                            <select class="form-select" id="ad_category">
                                <option value="x">Select</option>
                                <option value="1">Personal</option>
                                <option value="2">Spa</option>
                                <option value="3">Live Cam</option>
                                <option value="4">Hotel</option>
                                <option value="5">Other</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ad_description">Description</label>                                
                                <textarea class="form-control" cols="30" rows="40" placeholder="Description" id="ad_description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <button class="btn btn-primary" onclick="post_ad();">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- </section> -->

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