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
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png" sizes="32x32" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trang chủ - Broker WowHomes" />
    <meta property="og:url" content="http://broker.wowhomes.vn/" />
    <meta property="og:site_name" content="Broker WowHomes" />
    <meta property="og:image" content="http://wowhomes.vn/wp-content/uploads/2019/10/faviicon-wow.png">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Trang chủ - Broker WowHomes" />
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/css/lightgallery.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
</head>

<body>
<header>
    <div class="container-fluid mx-auto flex justify-between items-center px-4">
        <div class="logo">
            <a href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo/logo.png" alt="logo">
            </a>
        </div>
        <nav class="xl:block hidden">
            <ul class="xl:flex">
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="http://wowhomes.vn">Trang chủ WowHomes</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#gioi-thieu">Giới thiệu</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#tam-nhin">Tầm nhìn</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#chinh-sach">Chính sách</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#ly-do">5 lý do</a></li>
                <li class="xl:mr-6 xl:mb-0 mb-6 xl:text-base text-xl font-medium"><a href="#lien-he">Liên Hệ</a></li>
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
