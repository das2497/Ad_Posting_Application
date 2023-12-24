<?php

require 'connection.php';

if (empty($_POST['ad_title'])) {
    echo "Please enter Title";
} elseif (empty($_POST['ad_mobile'])) {
    echo "Please enter Mobile Number";
} elseif (!preg_match('/^(0|\+94)[0-9]{9}$/', preg_replace('/[^0-9]/', '', $_POST['ad_mobile']))) {
    echo "Please enter Valid Mobile Number";
} elseif (empty($_POST['ad_description'])) {
    echo "Please enter Description";
} elseif ($_POST['ad_category'] == 'x') {
    echo "Please Select Category";
} else {


    echo $_POST['ad_id'];
    echo "<br/>";
    echo $_POST['ad_title'];
    echo "<br/>";
    echo $_POST['ad_mobile'];
    echo "<br/>";
    echo $_POST['ad_description'];
    echo "<br/>";
    echo $_POST['ad_location'];
    echo "<br/>";
    echo $_POST['ad_category'];
    echo "<br/>";

    $uploadDir = 'images/ad_photos/';
    $img1 = '';
    $img2 = '';
    $img3 = '';
    $img4 = '';

    if (isset($_FILES['file1']) && $_FILES['file1']['error'] === UPLOAD_ERR_OK) {
        $img1 = $uploadDir . basename($_FILES['file1']['name']);

        // Move the uploaded file to the server directory
        move_uploaded_file($_FILES['file1']['tmp_name'], $img1);
    }
    if (isset($_FILES['file2']) && $_FILES['file2']['error'] === UPLOAD_ERR_OK) {
        $img2 = $uploadDir . basename($_FILES['file2']['name']);

        // Move the uploaded file to the server directory
        move_uploaded_file($_FILES['file2']['tmp_name'], $img2);
    }
    if (isset($_FILES['file3']) && $_FILES['file3']['error'] === UPLOAD_ERR_OK) {
        $img3 = $uploadDir . basename($_FILES['file3']['name']);

        // Move the uploaded file to the server directory
        move_uploaded_file($_FILES['file3']['tmp_name'], $img3);
    }
    if (isset($_FILES['file4']) && $_FILES['file4']['error'] === UPLOAD_ERR_OK) {
        $img4 = $uploadDir . basename($_FILES['file4']['name']);

        // Move the uploaded file to the server directory
        move_uploaded_file($_FILES['file4']['tmp_name'], $img4);
    }

    echo $img1 . ' ' . $img2 . ' ' . $img3 . ' ' . $img4;

    $currentDateTime = date("Y-m-d H:i:s");

    Database::search("UPDATE ad_ad
    SET
        ad_title = '" . $_POST['ad_title'] . "',
        ad_descrip = '" . $_POST['ad_description'] . "',
        ad_contact = '" . $_POST['ad_mobile'] . "',
        ad_location = '" . $_POST['ad_location'] . "',
        ad_img1 = '" . $img1 . "',
        ad_img2 = '" . $img2 . "',
        ad_img3 = '" . $img3 . "',
        ad_img4 = '" . $img4 . "',
        ad_categry = '" . $d['ad_category'] . "',
        ad_time = '" . $currentDateTime . "'
    WHERE
        ad_id = '" . $_POST['ad_id'] . "';");
}
