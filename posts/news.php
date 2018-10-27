<?php

// Register Custom Post Type
function news_posts() {
 
    $labels = array(
        'name'                => _x( 'News', 'Post Type General Name', 'badfunkstripe' ),
        'singular_name'       => _x( 'Story', 'Post Type Singular Name', 'badfunkstripe' ),
        'menu_name'           => __( 'News', 'badfunkstripe' ),
        'parent_item_colon'   => __( 'Parent Item:', 'badfunkstripe' ),
        'all_items'           => __( 'All Stories', 'badfunkstripe' ),
        'view_item'           => __( 'View Story', 'badfunkstripe' ),
        'add_new_item'        => __( 'Add New Story', 'badfunkstripe' ),
        'add_new'             => __( 'Add Story', 'badfunkstripe' ),
        'edit_item'           => __( 'Edit Story', 'badfunkstripe' ),
        'update_item'         => __( 'Update Story', 'badfunkstripe' ),
        'search_items'        => __( 'Search Story', 'badfunkstripe' ),
        'not_found'           => __( 'Not found', 'badfunkstripe' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'badfunkstripe' ),
    );
    $args = array(
        'label'               => __( 'News', 'badfunkstripe' ),
        'description'         => __( 'News Stories', 'badfunkstripe' ),
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
        'menu_icon'           => 'dashicons-megaphone',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'News', $args );
 
}
 
// Hook into the 'init' action
add_action( 'init', 'news_posts', 0 );