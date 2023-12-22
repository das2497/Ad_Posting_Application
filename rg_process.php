<?php
session_start();
require 'connection.php';

if (empty($_POST['rg_uname'])) {
    echo "Please enter Username";
} elseif (empty($_POST['rg_contact'])) {
    echo "Please enter Mobile Number";
} elseif (!preg_match('/^(0|\+94)[0-9]{9}$/', preg_replace('/[^0-9]/', '', $_POST['rg_contact']))) {
    echo "Please enter Valid Mobile Number";
} elseif (empty($_POST['rg_age'])) {
    echo "Please enter Age";
} elseif (!is_numeric($_POST['rg_age'])) {
    echo "Please enter Valid Age";
} elseif ($_POST['rg_age'] < 22) {
    echo "User must be older than 22";
} elseif (empty($_POST['rg_pass'])) {
    echo "Please enter Password";
} elseif (empty($_POST['rg_conf_pass'])) {
    echo "Please enter Confirm Password";
} elseif ($_POST['rg_pass'] != $_POST['rg_conf_pass']) {
    echo "Please enter Same Password and Confirm Password";
} else {

    // Remove any non-numeric characters
    $cleanNumber = preg_replace('/[^0-9]/', '', $_POST['rg_contact']);
    $formattedNumber = '';

    // Check if it starts with '0'
    if (substr($cleanNumber, 0, 1) === '0') {
        // Replace '0' with '+94'
        $formattedNumber = '+94' . substr($cleanNumber, 1);
    } elseif (substr($cleanNumber, 0, 3) === '+94') {
        // If it starts with '+94', do nothing
        $formattedNumber = $cleanNumber;
    }


    Database::iud("INSERT INTO ad_user(ausr_uname,ausr_contact,ausr_age,ausr_pass) 
    VALUES ('" . $_POST['rg_uname'] . "','" . $formattedNumber . "','" . $_POST['rg_age'] . "','" . $_POST['rg_pass'] . "');");
    echo "success";
}
