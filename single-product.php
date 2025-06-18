<?php get_header(); ?>
<?php $product = get_field('product') ?>


<section class="product_hero">
    <div class="container">
        <h2>
            <img src="<?php echo $product['white_icon']['url']?>" alt="icon">
            <span><?php the_title(); ?></span>
        </h2>
        <?php
        $content = apply_filters('the_content', get_the_content());
        $content = strip_shortcodes($content); // Shortcode va Gutenberg bloklarini olib tashlash
        $content = wp_strip_all_tags($content, true); // HTML teglarni olib tashlaydi
        $formatted_content = wpautop($content); // Matnni <p> bilan formatlash
        $formatted_content = str_replace('<p>', '<p class="text">', $formatted_content); // <p> ga .text class qo‘shish
        echo $formatted_content;
        ?>
        <div class="specialties">
            <div class="specialty">
                <div class="specialty_img_block">
                    <div class="specialty_img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/product_hero11.png" class="specialty_img1">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/product_hero12.png" class="specialty_img2">
                    </div>
                </div>
                <img class="specialty_mobile_img" src="<?php echo get_template_directory_uri() ?>/assets/images/lupa_mobile.png" alt="brain">
                <a href="#" class="specialty_arrow">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg" alt="arrow">
                </a>
                <div class="specialty_title">Узнать подробнее</div>
            </div>
            <div class="specialty">
                <div class="specialty_img_block">
                    <div class="specialty_img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/product_hero21.png" class="specialty_img1 ">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/plus2.png" class="specialty_img2">
                    </div>
                </div>
                <img class="specialty_mobile_img" src="<?php echo get_template_directory_uri() ?>/assets/images/plus_mobile.png" alt="brain">
                <a href="#" class="specialty_arrow">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg" alt="arrow">
                </a>
                <div class="specialty_title">Подключить</div>
            </div>
            <div class="specialty">
                <div class="specialty_img_block">
                    <div class="specialty_img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/product_hero31.png" class="specialty_img1">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/product_hero32.png" class="specialty_img2">
                    </div>
                </div>
                <img class="specialty_mobile_img" src="<?php echo get_template_directory_uri() ?>/assets/images/star_mobile.png" alt="brain">
                <a href="#" class="specialty_arrow">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg" alt="arrow">
                </a>
                <div class="specialty_title">Спец. предложение</div>
            </div>
        </div>
    </div>
</section>
</div>

<?php if ($product['who_benefit_hide'] !== "Yes" ): ?>
    <section class="who_benefit">
        <div class="container">
            <h2><?= $product['who_benefit_title'] ?></h2>
            <?php if (!empty($product['who_benefits'])): ?>
                <div class="org_cards">
                    <?php foreach ($product['who_benefits'] as $benefit ): ?>
                        <div class="org_card">
                            <div>
                                <div class="org_card_icon">
                                    <img src="<?php echo $benefit['icon']['url'] ?>" alt="hotel">
                                </div>
                            </div>
                            <div class="org_card_title"><?= $benefit['title'] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<?php if ($product['advantages_hide'] !== "Yes" ): ?>
    <section class="advantages">
        <div class="container">
            <h2><?= $product['advantages_title'] ?></h2>
            <div class="steps_card">
                <?php if (!empty($product['advantages'])): ?>
                    <div class="steps">
                        <?php foreach ($product['advantages'] as $index => $advantage ): ?>
                            <div class="step">
                                <div class="step_counter"><?= str_pad($index + 1, 3, '0', STR_PAD_LEFT) ?></div>
                                <p><?= $advantage['text'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="button_groups">
                <a href="#">Узнать подробнее</a>
                <a href="#">Подключить</a>
                <a href="#">Спец. предложение</a>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>