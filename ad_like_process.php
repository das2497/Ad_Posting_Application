<?php

require 'connection.php';

$rs = Database::search("SELECT * FROM ad_ad WHERE ad_id='" . $_POST['ad_id'] . "';");

$d = $rs->fetch_assoc();

$new_like = intval($d['ad_like']) + 1;

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

$final_like = formatNumber($new_like);

Database::iud("UPDATE ad_ad SET ad_like='" . $final_like . "' WHERE ad_id='" . $_POST['ad_id'] . "';");

echo "success";
