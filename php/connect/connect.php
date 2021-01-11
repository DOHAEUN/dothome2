<?php
    $host = "localhost";
    $user = "snan8800";
    $pw = "DohaEun0324!";
    $dbName = "snan8800";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        //echo "database connect true";
    }
?>