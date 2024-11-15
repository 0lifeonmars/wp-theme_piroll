<?php
if ( ! defined( '_S_VERSION' ) ) { define( '_S_VERSION', '1.0.0' ); }
function piroll_setup() {
	load_theme_textdomain( 'piroll', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array( 'menu-1' => esc_html__( 'Primary', 'piroll' ), ) );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'piroll_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'piroll_setup' );
function piroll_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'piroll_content_width', 640 );
}
add_action( 'after_setup_theme', 'piroll_content_width', 0 );
function footer_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Disclaimer',
		'id'            => 'footer_widget_disclaimer',
		'before_widget' => '<div class="footer__widget d_block w_fit">',
		'after_widget'  => '</div>'
	) );
}
add_action( 'widgets_init', 'footer_widgets_init' );
function piroll_scripts() {
	wp_enqueue_style( 'piroll-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'piroll-style', 'rtl', 'replace' );
	wp_enqueue_script( 'piroll-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_action( 'wp_enqueue_scripts', 'piroll_scripts' );
function searchfilter($query) {
    if ($query->is_search && !is_admin() ) { $query->set('post_type',array('post')); }
	return $query;
}
add_filter('pre_get_posts','searchfilter');
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/assets/assets.php';
require get_template_directory() . '/template-elements/element-social.php';
add_filter('wpcf7_autop_or_not', '__return_false');
if ( defined( 'JETPACK__VERSION' ) ) { require get_template_directory() . '/inc/jetpack.php'; }