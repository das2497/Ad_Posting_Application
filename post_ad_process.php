<?php
session_start();
require 'connection.php';

if (empty($_POST['ad_title'])) {
    echo "Please enter Title";
} elseif (empty($_POST['ad_mobile'])) {
    echo "Please enter Mobile Number";
}elseif (!preg_match('/^(0|\+94)[0-9]{9}$/', preg_replace('/[^0-9]/', '', $_POST['ad_mobile']))) {
    echo "Please enter Valid Mobile Number";
}  elseif (empty($_POST['ad_description'])) {
    echo "Please enter Description";
} elseif (empty($_POST['ad_location'])) {
    echo "Please enter Location";
} elseif ($_POST['ad_category'] == 'x') {
    echo "Please Select Category";
} else {

    $uploadDir = 'images/ad_photos/';
    $img1 = '';
    $img2 = '';
    $img3 = '';
    $img4 = '';

    if ($_FILES['file1']['error'] === UPLOAD_ERR_OK) {
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

    $currentDateTime = date("Y-m-d H:i:s");

    Database::iud("INSERT INTO ad_ad(ad_title,ad_descrip,ad_contact,ad_location,ad_img1,ad_img2,ad_img3,ad_img4,ad_categry,ad_user_ausr_id,ad_badge_adbg_id,ad_stat,ad_time)
    VALUES ('" . $_POST['ad_title'] . "','" . $_POST['ad_description'] . "','" . $_POST['ad_mobile'] . "','" . $_POST['ad_location'] . "','" . $img1 . "','" . $img2 . "','" . $img3 . "',
    '" . $img4 . "','" . $_POST['ad_category'] . "','" . $_SESSION['usr']['ausr_id'] . "','1','0','" . $currentDateTime . "');");
    echo "success";
}
