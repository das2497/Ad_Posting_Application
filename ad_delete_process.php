<?php

require 'connection.php';

Database::search("DELETE FROM ad_ad
WHERE ad_id = '" . $_POST['ad_id'] . "';");

echo "success";