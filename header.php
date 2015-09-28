<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pea_portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="masthead" class="site-header" role="banner">

        <!-- <nav id="site-navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="wrapper">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" aria-controls="primary-menu" aria-expanded="false" data-toggle="collapse" data-target="#main-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </div>

                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'main-navbar-collapse' ) ); ?>
            </div>
        </nav> -->
        <!-- #site-navigation -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="wrapper">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" aria-controls="primary-menu" aria-expanded="false" data-target="#main-menu-container">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a rel="home" href="http://misfist.site/portfolio/">Portfolio</a>
                    </h1>
                </div>
                <div id="main-menu-container" class="menu-container">
                    <ul id="primary-menu" class="nav navigation-menu" aria-expanded="false">
                        <li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28">
                            <a href="#home">Home</a>
                        </li>
                        <li id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29">
                            <a href="#about">About</a>
                        </li>
                        <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30">
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <li id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31">
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header><!-- #masthead -->


    <div id="content" class="site-content">
