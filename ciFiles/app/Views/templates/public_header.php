<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | RKSL Websites</title>
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo site_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/vendor/aos/aos.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/vendor/remixicon/remixicon.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/vendor/swiper/swiper-bundle.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/vendor/glightbox/css/glightbox.min.css"); ?>">

    <link rel="stylesheet" href="<?php echo site_url("assets/css/site.min.css"); ?>">
</head>
<body>
    <script src="<?php echo site_url("assets/js/jquery.min.js"); ?>"></script>
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?php echo site_url(""); ?>" class="logo d-flex align-items-center">
            <img src="assets/images/rkslLogo.png" alt="RKSL Logo" srcset="">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#features">Features</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link" target="_blank" href="<?php  echo site_url("login"); ?>">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->