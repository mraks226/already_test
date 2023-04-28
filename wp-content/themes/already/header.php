<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title();?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/049f1e9c33.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>

<div class="header">
    <?php
    wp_nav_menu( [
        'theme_location' => 'header_main_menu',
        'menu'           => 'Header main menu',
        'depth'          => 2,
        'container'      => 'nav',
    ] );
    ?>
</div>