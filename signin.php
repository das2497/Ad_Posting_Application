<?php
session_start();

if (isset($_SESSION['adm'])) {
    header('Location: adadmin.php');
} elseif (isset($_SESSION['usr'])) {
    header('Location: index.php');
} else {

?>


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
        <!-- FontAwesome -->
        <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
        <!-- Slick Carousel -->
        <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
        <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
        <!-- manin stylesheet -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>


        <section class="login-signup section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7">
                        <div class="login">
                            <div class="text-center"><a href="index.php"><img src="images/logos/logo.png" alt="" class="img-fluid"></a></div>

                            <h3 class="mt-4">Login Here</h3>
                            <?php
                            if (isset($_GET['sg'])) {
                            ?>
                                <h4 class="text-danger text-center">Pleace Login First</h4>
                            <?php
                            }
                            ?>
                            <div class="login-form row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="loginemail">Username</label>
                                        <input type="text" id="lg_uname" class="form-control" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="loginPassword">Password</label>
                                        <input type="password" id="lg_pass" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" onclick="log_process();">Login</button>

                                    <p class="mt-5 mb-0">Not a member yet? <a href="signup.php">Register Here</a></p>
                                </div>
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

<?php
}
?>