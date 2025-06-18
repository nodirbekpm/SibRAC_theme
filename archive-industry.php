<?php get_header(); ?>

<main class="container">
    <h1>Industries</h1>

    <?php if (have_posts()) : ?>
        <div class="industry-list">
            <?php while (have_posts()) : the_post(); ?>
                <article class="industry-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>
        <p>No industries found.</p>
    <?php endif; ?>
</main>
<?php
$industry_id = get_queried_object_id();

$related_products = new WP_Query(array(
    'post_type' => 'product',
    'meta_query' => array(
        array(
            'key' => '_related_industries',
            'value' => '"' . $industry_id . '"',
            'compare' => 'LIKE'
        )
    )
));

if ($related_products->have_posts()) :
    echo '<h2>Related Products</h2>';
    echo '<div class="related-products">';
    while ($related_products->have_posts()) : $related_products->the_post();
        echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a><br>';
    endwhile;
    echo '</div>';
    wp_reset_postdata();
endif;
?>

<?php get_footer(); ?>
