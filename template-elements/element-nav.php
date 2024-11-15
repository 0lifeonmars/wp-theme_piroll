<?php
/**
 * Element part for displaying nav mobile 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package famoraless
 */
?>
<?php
	if( is_page_template('home-page.php') ) {
		wp_nav_menu(array(
			'menu'				=> 'header-nav',
			'menu_class'		=> 'd_flex flex_column w_100',
            'container'         => 'nav',
			'container_class'	=> 'nav position_fixed zindex_4 left_0 w_100'
		));
    } else {
        wp_nav_menu(array(
			'menu'				=> 'header-page',
			'menu_class'		=> 'd_flex flex_column w_100',
            'container'         => 'nav',
			'container_class'	=> 'nav position_fixed zindex_4 left_0 w_100'
		));
	}
?>