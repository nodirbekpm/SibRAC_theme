<?php
function siberian_theme_setup() {
    // Theme support for title tag
    add_theme_support('title-tag');

    // Registering Navigation Menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));

    // Adding custom logo support
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'siberian_theme_setup');

// Enqueue styles and scripts
function siberian_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-fonts', get_stylesheet_directory_uri() . '/assets/fonts/font.css', array(), null);
}
add_action('wp_enqueue_scripts', 'siberian_enqueue_styles');

require_once get_template_directory() . '/inc/custom-post-type.php';

function register_my_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'your-theme-textdomain'),
    ));
}
add_action('after_setup_theme', 'register_my_menus');

// Product post type ga "Related Industry" meta box qo'shish
function add_product_industry_meta_box() {
    add_meta_box(
        'product_industry_meta_box',
        'Related Industries',
        'render_product_industry_meta_box',
        'product',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_product_industry_meta_box');

function render_product_industry_meta_box($post) {
    // Saqlangan industry ID'larini olish
    $selected_industries = get_post_meta($post->ID, '_related_industries', true);
    if (!is_array($selected_industries)) {
        $selected_industries = array();
    }

    // Barcha industry'larni olish
    $industries = get_posts(array('post_type' => 'industry', 'numberposts' => -1));

    echo '<div style="max-height: 200px; overflow-y: auto;">'; // Scroll qo'shish
    foreach ($industries as $industry) {
        $checked = in_array($industry->ID, $selected_industries) ? 'checked' : '';
        echo '<label style="display: block; margin-bottom: 5px;">
                <input type="checkbox" name="related_industries[]" value="' . $industry->ID . '" ' . $checked . '> 
                ' . esc_html($industry->post_title) . '
              </label>';
    }
    echo '</div>';
}

function save_product_industry_meta_box($post_id) {
    if (isset($_POST['related_industries'])) {
        update_post_meta($post_id, '_related_industries', $_POST['related_industries']);
    } else {
        delete_post_meta($post_id, '_related_industries');
    }
}
add_action('save_post', 'save_product_industry_meta_box');


add_filter('wpcf7_form_elements', function($content) {
    // <p> teglarini olib tashlash
    $content = preg_replace('/<p>(.*?)<\/p>/', '$1', $content);

    // wpcf7-form-control-wrap classini olib tashlash
    $content = preg_replace('/<span class="wpcf7-form-control-wrap"[^>]*>/', '', $content);
    $content = str_replace('</span>', '', $content);

    // <input type="submit"> ni <button> ga o'zgartirish
    $content = preg_replace_callback(
        '/<input ([^>]*?)type="submit"([^>]*?)value="([^"]+)"([^>]*?)>/',
        function ($matches) {
            return '<button ' . $matches[1] . ' type="submit"' . $matches[2] . $matches[4] . '>' . $matches[3] . '</button>';
        },
        $content
    );

    return $content;
});



add_filter('wpcf7_autop_or_not', '__return_false');



if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'General Settings',
        'menu_title'    => 'Site Settings',
        'menu_slug'     => 'site-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}


add_filter('acf/settings/show_admin', '__return_false');