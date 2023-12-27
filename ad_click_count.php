<?php

require 'connection.php';

$rs = Database::search("SELECT * FROM ad_ad WHERE ad_id='" . $_POST['ad_id'] . "';");
$d = $rs->fetch_assoc();

Database::iud("UPDATE ad_ad SET ad_visit='" . $d['ad_visit'] + 1 . "' WHERE ad_id='" . $_POST['ad_id'] . "';");
