<?php
// Industry bilan Product’ni bog‘lash
function add_product_industry_meta_box() {
    add_meta_box(
        'product_industry_meta', // Unique ID
        'Select Industry', // Box Title
        'render_product_industry_meta_box', // Callback function
        'product', // Affected Post Type
        'side', // Position
        'default' // Priority
    );
}
add_action('add_meta_boxes', 'add_product_industry_meta_box');

// Meta box rendering
function render_product_industry_meta_box($post) {
    $industries = get_posts(array(
        'post_type' => 'industry',
        'numberposts' => -1
    ));
    $selected_industry = get_post_meta($post->ID, '_product_industry', true);

    echo '<select name="product_industry" id="product_industry">';
    echo '<option value="">Select Industry</option>';
    foreach ($industries as $industry) {
        echo '<option value="' . $industry->ID . '" ' . selected($selected_industry, $industry->ID, false) . '>' . $industry->post_title . '</option>';
    }
    echo '</select>';
}

// Meta box ma'lumotlarini saqlash
function save_product_industry_meta_box($post_id) {
    if (array_key_exists('product_industry', $_POST)) {
        update_post_meta($post_id, '_product_industry', $_POST['product_industry']);
    }
}
add_action('save_post', 'save_product_industry_meta_box');
