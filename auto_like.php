<?php
require 'connection.php';

$rs = Database::search("SELECT * FROM ad_ad;");

for ($i = 0; $i < $rs->num_rows; $i++) {
    $d = $rs->fetch_assoc();


    $new_like = intval($d['ad_like']) + random_int(1, 9);

    $final_like = formatNumber($new_like);

    Database::iud("UPDATE ad_ad SET ad_like='" . $final_like . "' WHERE ad_id='" . $d['ad_id'] . "';");
}

function formatNumber($number)
{
    if ($number > 1000) {
        // If the number is greater than 1000, divide it by 1000 and append "k"
        $formattedNumber = number_format($number / 1000, 1) . "k";
    } else {
        // If the number is 1000 or less, keep it as is
        $formattedNumber = $number;
    }

    return $formattedNumber;
}