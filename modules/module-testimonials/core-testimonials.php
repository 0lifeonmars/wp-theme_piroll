<?php
/**
 * Register a custom post type called "testimonials".
 */
function wpdocs_codex_testimonial_init() {
    $labels = array(
        'name'                  => _x( 'testimonials', 'Post type general name', 'famoraless' ),
        'singular_name'         => _x( 'testimonial', 'Post type singular name', 'famoraless' ),
        'menu_name'             => _x( 'testimonials', 'Admin Menu text', 'famoraless' ),
        'name_admin_bar'        => _x( 'testimonial', 'Add new on Toolbar', 'famoraless' ),
        'add_new'               => __( 'Add new', 'famoraless' ),
        'add_new_item'          => __( 'Add new testimonial', 'famoraless' ),
        'new_item'              => __( 'Newtestimonial', 'famoraless' ),
        'edit_item'             => __( 'Edit testimonial', 'famoraless' ),
        'view_item'             => __( 'See testimonial', 'famoraless' ),
        'all_items'             => __( 'See all testimonials', 'famoraless' ),
        'search_items'          => __( 'search on testimonials', 'famoraless' ),
        'parent_item_colon'     => __( 'Parent testimonials:', 'famoraless' ),
        'not_found'             => __( 'Not found testimonials.', 'famoraless' ),
        'not_found_in_trash'    => __( 'Not found deleted testimonials in trash.', 'famoraless' ),
        'featured_image'        => _x( 'testimonial Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'remove_featured_image' => _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'use_featured_image'    => _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'archives'              => _x( 'Archive testimonials', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'famoraless' ),
        'insert_into_item'      => _x( 'Insert into testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'famoraless' ),
        'uploaded_to_this_item' => _x( 'SUploaded to this testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'famoraless' ),
        'filter_items_list'     => _x( 'Filter list testimonials', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'famoraless' ),
        'items_list_navigation' => _x( 'testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'famoraless' ),
        'items_list'            => _x( 'testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'famoraless' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-megaphone', 
        'menu_position'      => null,
        'show_in_rest'       => true,
        'rest_base'          => 'testimonials',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );
 
    register_post_type( 'testimonial', $args );
}
 
add_action( 'init', 'wpdocs_codex_testimonial_init' );
