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
    <title>McDonalds Nutrition Info</title>
    <!--linking to stylesheet-->
    <link rel="stylesheet" href="CSS/Page_Style.css">
    <link rel="icon" href="IMG/Favicon.ico">
</head>

<body>
    <!--header start-->
    <header>
        <img src="IMG/McArch.png" id="logo" alt="logo">
        <h2>I'm loving it</h2>
    </header>
    <!--header finihed-->