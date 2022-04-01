<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CryptoGuild</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div class="popupBackground"></div>
    <div class="mobileMenu">
        <div onclick="closeMenu()" class="close"><img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/x.png")?>"></div>
        <ul>
            <li><a onclick="closeMenu()" href="#materials">МАТЕРИАЛЫ</a></li>
            <li><a onclick="closeMenu()" href="#ecosystem">ЭКОСИСТЕМА</a></li>
            <li><a onclick="closeMenu()" href="#money">СТИПЕНДИИ</a></li>
            <li><a onclick="closeMenu()" href="#education">ОБУЧЕНИЕ</a></li>
            <li><a onclick="closeMenu()" href="#marketplace">МАРКЕТПЛЕЙС</a></li>
            <li><a onclick="closeMenu()" href="#fund">ВЕНЧУРНЫЙ ФОНД</a></li>
            <li><a onclick="closeMenu()" href="#team">КОМАНДА</a></li>
            <li><a onclick="closeMenu()" href="#news">НОВОСТИ</a></li>
        </ul>
    </div>
    <div class="wrapper">
        <header>
            <div onclick="openMenu()" class="mobMenuButton"></div>
            <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/logo.png")?>"/>
            <ul>
                <li><a href="#materials">МАТЕРИАЛЫ</a></li>
                <li><a href="#ecosystem">ЭКОСИСТЕМА</a></li>
                <li><a href="#money">СТИПЕНДИИ</a></li>
                <li><a href="#education">ОБУЧЕНИЕ</a></li>
                <li><a href="#marketplace">МАРКЕТПЛЕЙС</a></li>
                <li><a href="#fund">ВЕНЧУРНЫЙ ФОНД</a></li>
                <li><a href="#team">КОМАНДА</a></li>
                <li><a href="#news">НОВОСТИ</a></li>
            </ul>
            <div class="connect">
                CONNECT WALLET
            </div>
        </header>