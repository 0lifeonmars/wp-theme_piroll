<?php 
function is_blog () { return ( is_search() || is_archive() || is_author() || is_category() || is_home() || is_tag()) && 'post' == get_post_type(); }
/* css */
function mis_estilos() {
	wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('main');

    if (is_page_template('home-page.php') || is_page_template('about-page.php')) {
        wp_register_style('slick', get_template_directory_uri() . '/assets/css/min/slick.min.css');
	    wp_enqueue_style('slick');
    }

    if (is_page_template('home-page.php')) {
        wp_register_style('home', get_template_directory_uri() . '/assets/css/pages/home.css');
	    wp_enqueue_style('home');
    }

    if( is_blog () ) { 
        wp_register_style('archive', get_template_directory_uri() . '/assets/css/pages/archive.css');
	    wp_enqueue_style('archive');
    }

    if(!have_posts() ) { 
        wp_register_style('none', get_template_directory_uri() . '/assets/css/pages/none.css');
	    wp_enqueue_style('none');
    }

    if( is_404() ) { 
        wp_register_style('error404', get_template_directory_uri() . '/assets/css/pages/error404.css');
	    wp_enqueue_style('error404');
    }

    if ( is_single() ) {
        wp_register_style('single', get_template_directory_uri() . '/assets/css/pages/single.css');
	    wp_enqueue_style('single');
    }

    if( is_page() ) { 
        wp_register_style('pages', get_template_directory_uri() . '/assets/css/pages/pages.css');
	    wp_enqueue_style('pages');
    }

    if( is_page_template('about-page.php') ) { 
        wp_register_style('abou', get_template_directory_uri() . '/assets/css/pages/about.css');
	    wp_enqueue_style('abou');
    }

    if( is_page_template('contact-page.php') ) { 
        wp_register_style('contact', get_template_directory_uri() . '/assets/css/pages/contact.css');
	    wp_enqueue_style('contact');
    }
}
add_action('wp_enqueue_scripts', 'mis_estilos');
	
/*scripts*/
function mis_scripts() {
	if (!is_admin()) {
        wp_register_script('jquery', get_bloginfo('template_directory') .'/assets/js/min/jquery.min.js', array('jquery'), '1', true);
        wp_register_script('main', get_bloginfo('template_directory') .'/assets/js/main.js', array('jquery'), '1', true);

        wp_enqueue_script('jquery', array('jquery'), true);
		wp_enqueue_script('main', array('jquery'), true);

        if (is_page_template('home-page.php') || is_page_template('about-page.php') ) { // CARRUSELS & SLIDERS
            wp_register_script('slick', get_bloginfo('template_directory') .'/assets/js/min/slick.min.js', array('jquery'), '1', true);
            wp_enqueue_script('slick', array('jquery'), true);
        }

        if (is_page_template('home-page.php')) { // HOME PAGE
            wp_register_script('home', get_bloginfo('template_directory') .'/assets/js/home.js', array('jquery'), '1', true);
            wp_enqueue_script('home', array('jquery'), true);
        }

        if (is_page_template('contact-page.php')) { // CONTACT PAGE
            wp_register_script('contact', get_bloginfo('template_directory') .'/assets/js/pages/contact.js', array('jquery'), '1', true);
            wp_enqueue_script('contact', array('jquery'), true);
        }

        if( is_page_template('about-page.php') ) { // ABOUT PAGE
            wp_register_script('about', get_bloginfo('template_directory') .'/assets/js/pages/about.js', array('jquery'), '1', true);
            wp_enqueue_script('about', array('jquery'), true);
        }

        if( is_blog () ) { // WORK PAGES
            wp_register_script('work', get_bloginfo('template_directory') .'/assets/js/pages/work.js', array('jquery'), '1', true);
            wp_enqueue_script('work', array('jquery'), true);
        }
	}	
}
add_action('wp_enqueue_scripts', 'mis_scripts', 1 );