<?php

require 'connection.php';

$currentDateTime = date("Y-m-d H:i:s");

Database::search("UPDATE ad_ad SET 
ad_badge_adbg_id='" . $_POST['usr_badge'] . "',
ad_cashback='" . $_POST['usr_cashback'] . "',
ad_stat='" . $_POST['usr_stat'] . "',
ad_time = '" . $currentDateTime . "'
WHERE ad_id='" . $_POST['ad_id'] . "';");
echo "success";
