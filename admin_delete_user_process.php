<?php

require 'connection.php';

$rsad = Database::search("SELECT * FROM ad_ad WHERE ad_user_ausr_id='" . $_POST['usr_id'] . "';");

if (isset($_POST['yes'])) {
    Database::iud("DELETE FROM ad_ad WHERE ad_user_ausr_id='" . $_POST['usr_id'] . "';");
    Database::iud("DELETE FROM ad_user WHERE ausr_id = '" . $_POST['usr_id'] . "';");
    echo "success";
} elseif ($rsad->num_rows > 0) {
    echo "මෙම Userට දැන්වීම් තිබේ \n ඔබ මෙම User මකා දැමුවහොත්, මෙම Userගේ සියලුම දැන්වීම් මකා දැමෙනු ඇත";
} else {
    Database::iud("DELETE FROM ad_user WHERE ausr_id = '" . $_POST['usr_id'] . "';");
    echo "success";
}

// echo " DELETE FROM ad_user WHERE ausr_id = '" . $_POST['usr_id'] . "';";