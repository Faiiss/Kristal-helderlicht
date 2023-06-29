<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kristal_Helder_Licht
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'kristal-helder-licht'); ?></a>

		<header id="masthead" class="site-header">
			<div class="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="https://33278.hosts1.ma-cloud.nl/wp-content/uploads/2023/05/Kristal-Helder-Licht-FINAL-LOGO2.jpg" class="logo" alt="">
				</a>
			</div>

			<nav class="main-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary-menu',
						'container'      => false,
						'menu_class'     => '',
					)
				);
				?>
			</nav>

			<div class="icons">
				<?php aws_get_search_form(true); ?>
				<a href="#"><i class="bi bi-person"></i></a>
				<a href="<?php echo get_permalink(get_page_by_title('cart')); ?>"><i class="bi bi-bag-fill"></i></a>
			</div>
		</header><!-- #masthead -->