<?php
$industry_id = get_the_ID();
$industry = get_field('industry', $industry_id);
?>
<?php get_header(); ?>
<section class="hospital_industry">
    <div class="container">
        <h2><?php the_title(); ?></h2>

        <div class="skalas">
            <?php

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

            if ($related_products->have_posts()):
                while ($related_products->have_posts()): $related_products->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="skala"><?php the_title(); ?></a>
                <?php endwhile;
                wp_reset_postdata();
            else:
                echo "";
            endif;
            ?>
        </div>
        <?php if ($industry['hero_texts_hide'] !== "Yes"): ?>
            <div class="steps_block">
                <div class="steps">
                    <?php if (!empty($industry['hero_texts'])): ?>
                        <?php foreach ($industry['hero_texts'] as $index => $step): ?>
                            <div class="step">
                                <div class="step_counter"><?= str_pad($index + 1, 3, '0', STR_PAD_LEFT) ?></div>
                                <p><?= esc_html($step['text']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
</div>

<?php if ($industry['products_hide'] !== "Yes"): ?>
    <section class="products">
        <div class="container">
            <h2><?= $industry['products_title'] ?></h2>
            <div class="card_wrapper">


                <?php
                if ($related_products->have_posts()):
                    while ($related_products->have_posts()):
                        $related_products->the_post();

                        // ACF orqali 'product' maydonini olish
                        $product_field = get_field('product');

                        // 'product' maydonidan 'icon'ni olish
                        $icon = isset($product_field['icon']) ? $product_field['icon'] : null;

                        // Rasm URL ni olish
                        $icon_url = $icon ? esc_url($icon['url']) : get_template_directory_uri() . '/assets/images/product_card1.svg';

                        ?>

                        <div class="development_card">
                            <div class="card_header">
                                <div class="left_icon">
                                    <img src="<?php echo $icon_url; ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                </div>
                                <div class="right_icon">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            </div>
                            <div class="card_body">
                                <?php
                                $content = apply_filters('the_content', get_the_content());
                                $content = strip_shortcodes($content); // Shortcode va Gutenberg bloklarini olib tashlash
                                $content = wp_strip_all_tags($content, true); // HTML teglarni olib tashlaydi
                                $formatted_content = wpautop($content); // Matnni <p> bilan formatlash
                                $formatted_content = str_replace('<p>', '<p>', $formatted_content); // <p> ga .text class qo‘shish
                                echo $formatted_content;
                                ?>

                                <a href="<?php echo get_permalink(); ?>">
                                    <span>Подробнее</span>
                                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g id="Group">
                                            <path id="Vector"
                                                  d="M10.7742 0.544177C10.7216 0.490607 10.6589 0.448056 10.5897 0.419008C10.5204 0.389961 10.4461 0.375 10.371 0.375C10.296 0.375 10.2216 0.389961 10.1524 0.419008C10.0832 0.448056 10.0205 0.490607 9.96786 0.544177C9.86314 0.65062 9.80444 0.793962 9.80444 0.943288C9.80444 1.09261 9.86314 1.23596 9.96786 1.3424L14.0565 5.43106H0.564496C0.490229 5.43073 0.416631 5.44511 0.347957 5.47339C0.279284 5.50168 0.216898 5.54329 0.164406 5.59583C0.111914 5.64837 0.0703566 5.71079 0.0421372 5.77949C0.0139179 5.84819 -0.00040395 5.9218 -2.81674e-07 5.99607C-2.81674e-07 6.31058 0.249984 6.56869 0.564496 6.56869H14.0565L9.96786 10.6497C9.74989 10.8753 9.74989 11.2386 9.96786 11.4561C10.0205 11.5097 10.0832 11.5522 10.1524 11.5813C10.2216 11.6103 10.296 11.6253 10.371 11.6253C10.4461 11.6253 10.5204 11.6103 10.5897 11.5813C10.6589 11.5522 10.7216 11.5097 10.7742 11.4561L15.8308 6.3995C15.8843 6.34771 15.9269 6.28569 15.9559 6.21713C15.985 6.14857 16 6.07486 16 6.00039C16 5.92591 15.985 5.85221 15.9559 5.78364C15.9269 5.71508 15.8843 5.65306 15.8308 5.60127L10.7742 0.544177Z"
                                                  fill="#0066FF"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                else:
                    echo "";
                endif;
                ?>

            </div>
        </div>
    </section>
<?php endif; ?>


<section class="question_form">
    <div class="container">
        <div class="main_block">
            <div class="main_left">
                <h2>Остались вопросы?</h2>
                <p>Чтобы получить ответы на возникшие вопросы, просто заполните заявку, наш специалист с удовольствием
                    поможет Вам</p>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/question_form_img.png" alt="img"
                     class="main_img">
            </div>
            <div class="main_right">
                <?php echo do_shortcode('[contact-form-7 id="5788520" title="Остались вопросы?"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
