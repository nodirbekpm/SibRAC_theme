<?php get_header(); ?>

<main class="container">
    <h1>Products</h1>

    <?php if (have_posts()) : ?>
        <div class="product-list">
            <?php while (have_posts()) : the_post(); ?>
                <article class="product-item">
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
        <p>No products found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
