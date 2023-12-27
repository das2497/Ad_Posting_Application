<?php

require 'connection.php';

$rs = Database::search("SELECT * FROM ad_ad WHERE ad_id='" . $_POST['ad_id'] . "';");

$d = $rs->fetch_assoc();

$currentDateTime = date("Y-m-d H:i:s");

$query = "INSERT INTO ad_ad (
    ad_title,
    ad_descrip,
    ad_contact,
    ad_location,
    ad_img1,
    ad_img2,
    ad_img3,
    ad_categry,
    ad_user_ausr_id,
    ad_badge_adbg_id,
    ad_cashback,
    ad_stat,
    ad_time
) VALUES (
    '" . addslashes($d['ad_title']) . "',
    '" . addslashes($d['ad_descrip']) . "',
    '" . $d['ad_contact'] . "',
    '" . $d['ad_location'] . "',
    '" . $d['ad_img1'] . "',
    '" . $d['ad_img2'] . "',
    '" . $d['ad_img3'] . "',
    '" . $d['ad_categry'] . "',
    '" . $d['ad_user_ausr_id'] . "',
    '" . $d['ad_badge_adbg_id'] . "',
    '" . $d['ad_cashback'] . "',
    '" . $d['ad_stat'] . "',
    '" . $currentDateTime . "'
)";

Database::iud($query);

echo "success";
