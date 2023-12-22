<?php
session_start();
require 'connection.php';

if (empty($_POST["lg_uname"])) {
    echo "Please enter Username";
} elseif (empty($_POST["lg_pass"])) {
    echo "Please enter Password";
} else {

    $rs1 = Database::search("SELECT * FROM ad_admin WHERE admn_uname='" . $_POST['lg_uname'] . "' AND admn_pass='" . $_POST['lg_pass'] . "';");
    $rs2 = Database::search("SELECT * FROM ad_user WHERE ausr_uname='" . $_POST['lg_uname'] . "' AND ausr_pass='" . $_POST['lg_pass'] . "';");

    if (!empty($rs1) && $rs1->num_rows > 0) {
        $d = $rs1->fetch_assoc();
        $_SESSION["adm"] = $d;
        echo "1";
    } elseif (!empty($rs2) && $rs2->num_rows > 0) {
        $d = $rs2->fetch_assoc();
        $_SESSION["usr"] = $d;
        echo "2";
    } else {
        echo "Invalid Username Or Password ";
        // echo "SELECT * FROM ad_admin WHERE ausr_uname='" . $_POST['lg_uname'] . "' AND ausr_pass='" . $_POST['lg_pass'] . "';";
    }
}
