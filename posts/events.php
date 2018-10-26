<?php

// Register Custom Post Type
function events_post() {
 
    $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name', 'badfunkstripe' ),
        'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'badfunkstripe' ),
        'menu_name'           => __( 'Events', 'badfunkstripe' ),
        'parent_item_colon'   => __( 'Parent Item:', 'badfunkstripe' ),
        'all_items'           => __( 'All Events', 'badfunkstripe' ),
        'view_item'           => __( 'View Event', 'badfunkstripe' ),
        'add_new_item'        => __( 'Add New Event', 'badfunkstripe' ),
        'add_new'             => __( 'Add Event', 'badfunkstripe' ),
        'edit_item'           => __( 'Edit Event', 'badfunkstripe' ),
        'update_item'         => __( 'Update Event', 'badfunkstripe' ),
        'search_items'        => __( 'Search Event', 'badfunkstripe' ),
        'not_found'           => __( 'Not found', 'badfunkstripe' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'badfunkstripe' ),
    );
    $args = array(
        'label'               => __( 'Events', 'badfunkstripe' ),
        'description'         => __( 'Events', 'badfunkstripe' ),
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-calendar',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'Events', $args );
 
}
 
// Hook into the 'init' action
add_action( 'init', 'events_post', 0 );