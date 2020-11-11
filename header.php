<?php 

    session_start();
    include("config.php");

    $dbconnect = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    
    if(mysqli_connect_errno()) {
        echo "Connection failded:".mysqli_connect_error();
        exit;
    }

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find out nutrisional value of Mcdonals food">
    <meta name="author" content="177013 Squad">
    <title>Wakdonalds Nutrition Info</title>
    <!--linking to stylesheet-->
    <link rel="stylesheet" href="CSS/Page_Style.css">
    <link rel="stylesheet" href="CSS/Content.css">
    <script src="JS/Modal_Box.js"></script>
    <link rel="icon" href="IMG/Favicon.ico">
</head>

<body>
    <div class="page_container">
        <div class="content_wrapper">
            <!--header start-->
            <header>
                <div class="bk_img">
                    <div class="container">
                        <a href="index.php"><img src="IMG/McArch.png" id="logo" alt="logo"></a>
                        <h2>Know what you eat</h2>
                    </div>
                </div>
            </header>