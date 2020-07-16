<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wow-home
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOW Home</title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png" sizes="32x32" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
</head>

<body>
<header>
    <div class="container-fluid mx-auto flex justify-between items-center xl:px-0 px-4">
        <div class="logo">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo/logo.png" alt="logo">
            </a>
        </div>
        <nav class="xl:block hidden">
            <ul class="xl:flex">
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#">Trang chủ WowHomes</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#">Giới thiệu</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#">Tầm nhìn</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#">Chính sách</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#">Tin Tức</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#">Liên Hệ</a></li>
                <li class="font-medium">
                    <a href="tel:028 226 2727" class="btn-hotline">Hotline: 028.226.2727</a>
                </li>
            </ul>
        </nav>
        <div id="nav-icon3" class="xl:hidden block">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
