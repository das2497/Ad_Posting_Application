<?php

session_start();

if (isset($_SESSION["adm"])) {

    $_SESSION["adm"] = null;
    session_destroy();
    echo "success";
} elseif (isset($_SESSION["usr"])) {

    $_SESSION["usr"] = null;
    session_destroy();
    echo "success";
}
