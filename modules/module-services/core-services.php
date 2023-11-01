<?php
/**
 * Register a custom post type called "services".
 */
function wpdocs_codex_service_init() {
    $labels = array(
        'name'                  => _x( 'services', 'Post type general name', 'famoraless' ),
        'singular_name'         => _x( 'service', 'Post type singular name', 'famoraless' ),
        'menu_name'             => _x( 'services', 'Admin Menu text', 'famoraless' ),
        'name_admin_bar'        => _x( 'service', 'Add new on Toolbar', 'famoraless' ),
        'add_new'               => __( 'Add new', 'famoraless' ),
        'add_new_item'          => __( 'Add new service', 'famoraless' ),
        'new_item'              => __( 'Newservice', 'famoraless' ),
        'edit_item'             => __( 'Edit service', 'famoraless' ),
        'view_item'             => __( 'See service', 'famoraless' ),
        'all_items'             => __( 'See all services', 'famoraless' ),
        'search_items'          => __( 'search on services', 'famoraless' ),
        'parent_item_colon'     => __( 'Parent services:', 'famoraless' ),
        'not_found'             => __( 'Not found services.', 'famoraless' ),
        'not_found_in_trash'    => __( 'Not found deleted services in trash.', 'famoraless' ),
        'featured_image'        => _x( 'service Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'remove_featured_image' => _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'use_featured_image'    => _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'archives'              => _x( 'Archive services', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'famoraless' ),
        'insert_into_item'      => _x( 'Insert into service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'famoraless' ),
        'uploaded_to_this_item' => _x( 'SUploaded to this service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'famoraless' ),
        'filter_items_list'     => _x( 'Filter list services', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'famoraless' ),
        'items_list_navigation' => _x( 'services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'famoraless' ),
        'items_list'            => _x( 'services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'famoraless' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-lightbulb', 
        'menu_position'      => null,
        'show_in_rest'       => true,
        'rest_base'          => 'services',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );
 
    register_post_type( 'service', $args );
}
 
add_action( 'init', 'wpdocs_codex_service_init' );
