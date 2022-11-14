<?php
session_start();
$email_address= $_SESSION['email'];
if(empty($email_address))
{
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post Up</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    <?php include "style/style.css"?>
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--nav bar-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: beige;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <h1 class="main_head"> Post Up</h1>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="genre.php#lifeStyle">Lifestyle</a></li>
                            <li><a class="dropdown-item" href="genre.php#travel">Travel</a></li>
                            <li><a class="dropdown-item" href="genre.php#food">Food</a></li>
                            <li><a class="dropdown-item" href="genre.php#fashion">Fashion</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="genre.php#others">Others</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>