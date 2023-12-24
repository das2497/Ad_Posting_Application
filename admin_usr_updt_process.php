<?php

require 'connection.php';

if (empty($_POST['up_uname'])) {
    echo "Please enter Username";
} elseif (empty($_POST['up_contact'])) {
    echo "Please enter Contact";
} elseif (empty($_POST['up_age'])) {
    echo "Please enter Age";
} elseif (empty($_POST['up_pass'])) {
    echo "Please enter Password";
} else {

    Database::search("UPDATE ad_user 
    SET ausr_uname='" . $_POST['up_uname'] . "',ausr_contact='" . $_POST['up_contact'] . "',ausr_age='" . $_POST['up_age'] . "',ausr_pass='" . $_POST['up_pass'] . "' 
    WHERE ausr_id='" . $_POST['uid'] . "';");
    echo "success";
}
