<?php

if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addCss(SITE_TEMPLATE_PATH . '/vendor/jquery.fancybox/jquery.fancybox.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/vendor/fontawesome-free/css/all.css');

$asset->addJs(SITE_TEMPLATE_PATH . '/vendor/jquery/jquery.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/vendor/bootstrap/js/bootstrap.bundle.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/vendor/jquery.fancybox/jquery.fancybox.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/script.js');
?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $APPLICATION->ShowHead()?>

    <title><?php $APPLICATION->ShowTitle()?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
</head>

<body>
<?php $APPLICATION->ShowPanel()?>
<div class="main-wrapper" id="app">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Обжорозаврик <i class="fas fa-dragon <?php $APPLICATION->AddBufferContent('getHeaderIconColor')?>"></i></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dinosaurs.html">Динозавры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shelter.html">Приют динозавриков</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-secondary" href="auth.html">Войти</a>
                        <a class="btn btn-outline-secondary" href="register.html">Зарегистрироваться</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="avatar-link nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/images/avartar-dinosaur-100.png"  class="rounded-circle bg-white avatar-img" alt="Аватар">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="#">Личный кабинет</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Выйти</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
