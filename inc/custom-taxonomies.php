<?php
// Register Taxonomy for Industries
function create_industry_taxonomy() {
    register_taxonomy(
        'industry_category', // Taxonomy slug
        'industry', // Bog‘lanadigan Custom Post Type
        array(
            'labels' => array(
                'name' => 'Industry Categories',
                'singular_name' => 'Industry Category',
            ),
            'hierarchical' => true, // Agar categoriyalarni parent-child qilsak
            'public' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'industry-category'),
        )
    );
}
add_action('init', 'create_industry_taxonomy');
