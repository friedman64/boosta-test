<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<header class="header">
            <div class="container">
                <div class="header-inner">
                    <div class="header__logo">
                        <?php $logo_image = esc_url( get_theme_mod( 'logo_image' ) ); ?>
                        <?php if (!empty($logo_image)) : ?>
                            <a href="#">
                                <img src="<?php echo $logo_image; ?>" alt="Logo">
                            </a>
                        <?php endif; ?>
                    </div>

                    <nav class="header__menu mob-menu js-mob-menu">
                        <div class="menu-inner">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'header',
                                'menu'           => '',
                                'menu_class'     => '',
                                'container'      => ''
                            )); ?>
                        </div>
                    </nav>

                    <button class="menu-button js-mob-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>

        </header>

		<div id="content" class="site-content">
