<?php
    include_once("helpers/url.php");
    include_once("data/category.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Cod3r</title>
    <link rel="stylesheet" href="./css/styleBlog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
</head>
    <header>
        <a href="<?=$BASE_URL ?>" id="logo">
            <img src="<?=$BASE_URL ?>/img/logo.svg" alt="Blog Cod3r">
        </a>
        <nav>
            <ul id="navbar">
                <li><a class="nav-link" href="<?=$BASE_URL ?>">Home</a></li>
                <li><a class="nav-link" href="<?=$BASE_URL ?>about.php">About us</a></li>
                <li><a class="nav-link" href="<?=$BASE_URL ?>contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
<body>

