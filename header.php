<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navbar -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/">Home</a>
    <a href="/catalogue">Catalogue</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

<!-- Use any element to open the sidenav -->
<span class="navButton" onclick="openNav()">
    <ion-icon name="menu-outline"
              style="font-size: 48px; background-color: #f1f1f1; top: 30px; left: 30px; position: fixed; padding: 8px; box-shadow: rgba(60, 64, 67, 0.3) 0 1px 2px 0, rgba(60, 64, 67, 0.15) 0 1px 3px 1px; cursor: pointer;"
    >
    </ion-icon></span>

<!-- Header Image -->
<img
        src="<?php echo get_template_directory_uri() . "/img/header.jpg" ?>"
        class="w-100 mt-0"
        style="height: 337px; object-fit: cover; margin-top: -25px !important"
        alt="Sunset"
>