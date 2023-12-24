<?php
require 'connection.php';

if (empty($_POST['msg_name'])) {
    echo "ඔබගේ නම ලබා දෙන්න.";
} elseif (empty($_POST['msg_contact'])) {
    echo "ඔබගේ දුරකථන අංකය ලබා දෙන්න.";
} else {
    Database::search("INSERT INTO ad_message(admsg_name,admsg_contact,admsg_type) VALUES ('" . $_POST['msg_name'] . "','" . $_POST['msg_contact'] . "','" . $_POST['type'] . "');");
    echo "success";
}
