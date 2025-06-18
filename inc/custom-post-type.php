<?php
// Register Custom Post Type for Industry
function register_industry_post_type() {
    register_post_type('industry', array(
        'labels' => array(
            'name'          => 'Industries',
            'singular_name' => 'Industry',
            'add_new'       => 'Add New Industry',
            'add_new_item'  => 'Add New Industry',
            'edit_item'     => 'Edit Industry',
            'new_item'      => 'New Industry',
            'view_item'     => 'View Industry',
            'search_items'  => 'Search Industries',
            'not_found'     => 'No industries found',
            'not_found_in_trash' => 'No industries found in trash',
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_position'=> 5,
        'menu_icon'    => 'dashicons-building',
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'      => array('slug' => 'industries'),
        'show_in_rest' => true, // Gutenberg uchun
    ));

    // Register Product Post Type
    register_post_type('product', array(
        'labels' => array(
            'name'          => 'Products',
            'singular_name' => 'Product',
            'add_new'       => 'Add New Product',
            'add_new_item'  => 'Add New Product',
            'edit_item'     => 'Edit Product',
            'new_item'      => 'New Product',
            'view_item'     => 'View Product',
            'search_items'  => 'Search Products',
            'not_found'     => 'No products found',
            'not_found_in_trash' => 'No products found in trash',
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_position'=> 6,
        'menu_icon'    => 'dashicons-cart',
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'      => array('slug' => 'products'),
        'show_in_rest' => true, // Gutenberg uchun
    ));
}
add_action('init', 'register_industry_post_type');
