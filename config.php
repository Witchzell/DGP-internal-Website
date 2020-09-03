<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "dgp_mcdonalds";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

?>
