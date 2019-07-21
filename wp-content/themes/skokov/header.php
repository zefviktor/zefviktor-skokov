<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skokov
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php get_the_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>



<header id="header" class="header header__background">
    <div class="container nav-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <h1 class="logo" >skokov</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu( array(
                'menu_class'      => 'nav__menu navbar-nav',          // (string) class самого меню (ul тега)
                'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                'container_class' => 'collapse navbar-collapse justify-content-end',              // (string) class контейнера (div тега)
                'container_id'    => 'navbarNav',              // (string) class контейнера (div тега)
                'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                'depth'           => 0
            ) );
            ?>
        </nav>
    </div>


</header>

