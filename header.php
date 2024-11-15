<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package piroll
 */
?>
<!doctype html>
<html <?php language_attributes('es'); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?> <?php is_404(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header <?php if( is_page_template('home-page.php') ) { echo 'position_fixed'; }  else { echo 'position_sticky'; } ?> top_0 left_0 w_100 zindex_5" <?php if( !is_page_template('home-page.php') ) { echo 'data-bg-color="white"'; } ?>>
		<h1 class="friendly_anchortext">Famoraless - <?php if(is_blog ()) { echo 'Piroll Theme'; } else { echo get_the_title(); } ?></h1>
		<div class="row d_flex justify_content-between align_items-center mx_auto w_100 h_100">
			<a class="header__logo d_flex align_items-center" href="<?php if( is_page_template('home-page.php') ) { echo '#home'; } else { echo get_home_url(); } ?>">
				<svg xmlns="http://www.w3.org/2000/svg" class="d_block w_100 fill_black" version="1.1" viewBox="0.00 0.00 31.00 25.00"><path d="   M 0.00 0.00   L 31.00 0.00   L 31.00 1.42   L 16.30 25.00   L 14.69 25.00   L 0.00 1.34   L 0.00 0.00   Z   M 13.31 2.55   A 0.33 0.33 0.0 0 0 13.04 2.04   L 3.42 2.04   A 0.33 0.33 0.0 0 0 3.15 2.55   L 7.95 10.14   A 0.33 0.33 0.0 0 0 8.51 10.14   L 13.31 2.55   Z   M 27.85 2.54   A 0.32 0.32 0.0 0 0 27.58 2.05   L 17.94 2.04   A 0.32 0.32 0.0 0 0 17.67 2.53   L 22.50 10.16   A 0.32 0.32 0.0 0 0 23.04 10.16   L 27.85 2.54   Z   M 15.77 3.38   A 0.32 0.32 0.0 0 0 15.23 3.38   L 9.65 12.17   A 0.32 0.32 0.0 0 0 9.65 12.51   L 15.23 21.34   A 0.32 0.32 0.0 0 0 15.77 21.34   L 21.34 12.52   A 0.32 0.32 0.0 0 0 21.34 12.18   L 15.77 3.38   Z"/></svg>
				<span class="friendly_anchortext d_block">volver al inicio</span>
			</a>
			
			<button type="button" class="header__toggler d_flex justify_content-center align_items-center p_0">
				<svg xmlns="http://www.w3.org/2000/svg" class="d_block fill_black" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>
			</button>

			<?php
				if( is_page_template('home-page.php') ) {
					wp_nav_menu(array(
						'menu'				=> 'header-nav',
						'menu_class'		=> 'd_flex align_items-center gap_xl',
						'container_class'	=> 'header__nav'
					));
				} else {
					wp_nav_menu(array(
						'menu'				=> 'header-page',
						'menu_class'		=> 'd_flex align_items-center gap_xl',
						'container_class'	=> 'header__nav'
					));
				}
			?>
		</div>
	</header>

	<?php require_once('template-elements/element-nav.php'); ?>