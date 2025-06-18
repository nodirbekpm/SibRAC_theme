<?php
/*
 * Template name: Main page
 * */

get_header();

$home = get_field('home');
?>

    <section class="rock_section">
        <div class="container position-relative">
            <div class="rock_items">
                <?php
                $args = array(
                    'post_type' => 'product', // Mahsulotlarni olish
                    'posts_per_page' => -1, // Barcha mahsulotlarni chiqarish
                    'orderby' => 'title',
                    'order' => 'ASC'
                );

                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                        $product_field = get_field('product'); // ACF dan product maydonini olish
                        $icon = $product_field['white_mini_icon'] ?? ''; // Rasm olish
                        $icon_url = $icon ? esc_url($icon['url']) : get_template_directory_uri() . '/assets/images/СКАЛА-ЕПГУ.svg';
                        ?>

                        <a href="<?php the_permalink(); ?>" class="rock_item">
                            <img src="<?php echo $icon_url; ?>" alt="<?php the_title(); ?>">
                            <span><?php the_title(); ?></span>
                        </a>

                    <?php endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>Mahsulotlar topilmadi.</p>';
                endif;
                ?>
            </div>

            <div class="swiper rockSwiper">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => 'product', // Mahsulotlarni olish
                        'posts_per_page' => -1, // Barcha mahsulotlarni chiqarish
                        'orderby' => 'title',
                        'order' => 'ASC'
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        while ($query->have_posts()): $query->the_post();
                            $product_field = get_field('product'); // ACF dan product maydonini olish
                            $icon = $product_field['white_mini_icon'] ?? ''; // Rasm olish
                            $icon_url = $icon ? esc_url($icon['url']) : get_template_directory_uri() . '/assets/images/СКАЛА-ЕПГУ.svg';
                            ?>
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $icon_url; ?>" alt="<?php the_title(); ?>">
                                    <span><?php the_title(); ?></span>
                                </a>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata();
                    else:
                        echo '';
                    endif;
                    ?>
                </div>
            </div>
            <div class="swiper_btn rock_left position-absolute top-50 translate-middle-y z-3">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rock_left.svg" alt="arrow">
            </div>
            <div class="swiper_btn rock_right position-absolute right-0 top-50 translate-middle-y z-3">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rock_right.svg" alt="arrow">
            </div>
        </div>
    </section>
    <section class="specialties_section">
        <div class="container">
            <div class="specialties">
                <a href="<?php echo home_url('/?industry=' . urlencode('Индустрия гостеприимства')); ?>"
                   class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/flower1.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/flower2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img style="width: 150px;bottom: -50px;right: -20px;" class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/flower_temp_mobile.png"
                         alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Индустрия
                        гостеприимства
                    </div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Искусственный интеллект')); ?>"
                   class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/brain1.png"
                                 class="specialty_img1 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/brain2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/brain_mobile.png" alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Искусственный
                        интеллект
                    </div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Промышленность')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/settings1.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/settings2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/settings_mobile.png" alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Промышленность</div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Энергетика')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/energetika2.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/energetika.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/energetika_mobile1.png"
                         alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Энергетика</div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Электронная коммерция')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/strelka1.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/strelka2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/click_mobile.png" alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Электронная
                        коммерция
                    </div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Культура и искусство')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/tone1.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/tone2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/tone_mobile1.png" alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Культура <br>
                        и искусство
                    </div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Транспорт и связь')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img style="left: -5px; bottom: 3px;"
                                 src="<?php echo get_template_directory_uri() ?>/assets/images/airplane11.png"
                                 class="specialty_img1">
                            <img style="position: relative; left: 44px;"
                                 src="<?php echo get_template_directory_uri() ?>/assets/images/airplane2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/airplane_mobile1.png"
                         alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Транспорт <br>
                        и связь
                    </div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Наука и образование')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/book1.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/book2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/book_mobile1.png" alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Наука <br class="d-sm-none d-block">и образование</div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Страхование')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ambrella1.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ambrella2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/anbrella_mobile.png" alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Страхование</div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Здравоохранение')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/heard11.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/heard2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/heard_mobile1.png" alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Здравоохранение</div>
                </a>
                <a href="<?php echo home_url('/?industry=' . urlencode('Госсектор')); ?>" class="specialty">
                    <div class="specialty_img_block">
                        <div class="specialty_img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/museum1.png"
                                 class="specialty_img1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/museum2.png"
                                 class="specialty_img2">
                        </div>
                    </div>
                    <img class="specialty_mobile_img"
                         src="<?php echo get_template_directory_uri() ?>/assets/images/museum_mobile1.png" alt="brain">
                    <div class="specialty_arrow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/ellipse_arrow.svg"
                             alt="arrow">
                    </div>
                    <div class="specialty_title">Госсектор</div>
                </a>
            </div>
        </div>
    </section>
    </div>

<?php if ($home['development_hide'] !== "Yes"): ?>
    <section class="development_areas">
        <div class="container">
            <h2><?= $home['development_title'] ?></h2>
            <div class="card_wrapper">
                <?php foreach ($home['development_cards'] as $index => $development_card): ?>
                    <div class="development_card">
                        <div class="card_header">
                            <div class="left_icon">
                                <img src="<?php echo $development_card['icon']['url'] ?>" alt="left_icon">
                            </div>
                            <div class="right_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="270" height="265" viewBox="0 0 270 265"
                                     fill="none">
                                    <g opacity="0.4" filter="url(#filter0_f_144_347)">
                                        <circle cx="135" cy="130" r="40" fill="#0066FF"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_144_347" x="0.599998" y="-4.4" width="268.8"
                                                height="268.8" filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                     result="shape"/>
                                            <feGaussianBlur stdDeviation="47.2"
                                                            result="effect1_foregroundBlur_144_347"/>
                                        </filter>
                                    </defs>
                                </svg>
                                <img src="<?php echo $development_card['image']['url'] ?>"
                                     alt="right_icon">
                            </div>
                        </div>
                        <div class="card_body">
                            <h3><?= $development_card['title'] ?></h3>
                            <p><?= $development_card['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if ($home['research_hide'] !== "Yes"): ?>
    <section class="research_work">
        <div class="container">
            <h2><?= $home['research_title'] ?></h2>
            <div class="work_main">
                <div class="work_left">
                    <div class="custom_scrollbar">
                        <div class="scroll_thumb"></div>
                    </div>
                    <div class="scroll_card">
                        <img class="scroll_img"
                             src="<?php echo get_template_directory_uri() ?>/assets/images/scroll_card_search_icon.svg"
                             alt="icon">
                        <div class="scroll_card_title">Лаборатории НИИ</div>
                        <div class="scroll_card_blur"></div>
                        <div class="scroll_card_body">
                            <?php foreach ($home['research_labs'] as $index => $lab): ?>
                                <div class="scroll_card_item">
                                    <div>
                                        <span class="scroll_item_order"><?= str_pad($index + 1, 3, '0', STR_PAD_LEFT) ?></span>
                                    </div>
                                    <h3><?= esc_html($lab['title']) ?></h3>
                                    <p><?= esc_html($lab['text']) ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="work_right">
                    <div class="work_right_items">
                        <?php foreach ($home['research_infos'] as $info): ?>
                            <div class="work_right_item">
                                <div class="work_right_icon">
                                    <img src="<?php echo $info['icon']['url'] ?>" alt="icon">
                                </div>
                                <div>
                                    <?php
                                    // span tegini tekshiramiz
                                    $title = $info['title'];
                                    $class = (strpos($title, '<span') === false) ? ' class="without_span"' : '';
                                    ?>
                                    <h3<?= $class ?>><?= $title ?></h3>
                                    <p><?= $info['text'] ?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($home['partners_hide'] !== "Yes"): ?>
    <section class="partners_integrations">
        <div class="container">
            <h2><?= $home['partners_title'] ?></h2>
            <div class="swiper_part">
                <div class="partnersSwiper swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($home['partners_cards'] as $partners_card): ?>
                            <div class="swiper-slide">
                                <div>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partners_swiper_star.svg"
                                         alt="icon">
                                </div>
                                <h3><?= $partners_card['text'] ?></h3>
                                <a href="<?php echo $partners_card['link']['url'] ?>">
                                    <span>Подробнее</span>
                                    <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/blue_arrow.svg" alt="arrow"> -->
                                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g id="Group">
                                            <path id="Vector"
                                                  d="M10.7742 0.544177C10.7216 0.490607 10.6589 0.448056 10.5897 0.419008C10.5204 0.389961 10.4461 0.375 10.371 0.375C10.296 0.375 10.2216 0.389961 10.1524 0.419008C10.0832 0.448056 10.0205 0.490607 9.96786 0.544177C9.86314 0.65062 9.80444 0.793962 9.80444 0.943288C9.80444 1.09261 9.86314 1.23596 9.96786 1.3424L14.0565 5.43106H0.564496C0.490229 5.43073 0.416631 5.44511 0.347957 5.47339C0.279284 5.50168 0.216898 5.54329 0.164406 5.59583C0.111914 5.64837 0.0703566 5.71079 0.0421372 5.77949C0.0139179 5.84819 -0.00040395 5.9218 -2.81674e-07 5.99607C-2.81674e-07 6.31058 0.249984 6.56869 0.564496 6.56869H14.0565L9.96786 10.6497C9.74989 10.8753 9.74989 11.2386 9.96786 11.4561C10.0205 11.5097 10.0832 11.5522 10.1524 11.5813C10.2216 11.6103 10.296 11.6253 10.371 11.6253C10.4461 11.6253 10.5204 11.6103 10.5897 11.5813C10.6589 11.5522 10.7216 11.5097 10.7742 11.4561L15.8308 6.3995C15.8843 6.34771 15.9269 6.28569 15.9559 6.21713C15.985 6.14857 16 6.07486 16 6.00039C16 5.92591 15.985 5.85221 15.9559 5.78364C15.9269 5.71508 15.8843 5.65306 15.8308 5.60127L10.7742 0.544177Z"
                                                  fill="#0066FF"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="partnersSwiperPrev swiper_btn">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partners_prev.svg" alt="prev">
                </div>
                <div class="partnersSwiperNext swiper_btn">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partners_next.svg" alt="next">
                </div>
            </div>
            <div class="cards_part">
                <div class="partners_cards">
                    <div class="partners_card">
                        <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/partners_swiper_star.svg"
                                 alt="icon">
                        </div>
                        <h3>Международный совет русских немцев «Возрождение»</h3>
                        <a href="#">
                            <span>Подробнее</span>
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/blue_arrow.svg" alt="arrow"> -->
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="Group">
                                    <path id="Vector"
                                          d="M10.7742 0.544177C10.7216 0.490607 10.6589 0.448056 10.5897 0.419008C10.5204 0.389961 10.4461 0.375 10.371 0.375C10.296 0.375 10.2216 0.389961 10.1524 0.419008C10.0832 0.448056 10.0205 0.490607 9.96786 0.544177C9.86314 0.65062 9.80444 0.793962 9.80444 0.943288C9.80444 1.09261 9.86314 1.23596 9.96786 1.3424L14.0565 5.43106H0.564496C0.490229 5.43073 0.416631 5.44511 0.347957 5.47339C0.279284 5.50168 0.216898 5.54329 0.164406 5.59583C0.111914 5.64837 0.0703566 5.71079 0.0421372 5.77949C0.0139179 5.84819 -0.00040395 5.9218 -2.81674e-07 5.99607C-2.81674e-07 6.31058 0.249984 6.56869 0.564496 6.56869H14.0565L9.96786 10.6497C9.74989 10.8753 9.74989 11.2386 9.96786 11.4561C10.0205 11.5097 10.0832 11.5522 10.1524 11.5813C10.2216 11.6103 10.296 11.6253 10.371 11.6253C10.4461 11.6253 10.5204 11.6103 10.5897 11.5813C10.6589 11.5522 10.7216 11.5097 10.7742 11.4561L15.8308 6.3995C15.8843 6.34771 15.9269 6.28569 15.9559 6.21713C15.985 6.14857 16 6.07486 16 6.00039C16 5.92591 15.985 5.85221 15.9559 5.78364C15.9269 5.71508 15.8843 5.65306 15.8308 5.60127L10.7742 0.544177Z"
                                          fill="#0066FF"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="partners_card">
                        <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/partners_swiper_star.svg"
                                 alt="icon">
                        </div>
                        <h3>Федеральная <br>таможенная служба</h3>
                        <a href="#">
                            <span>Подробнее</span>
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/blue_arrow.svg" alt="arrow"> -->
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="Group">
                                    <path id="Vector"
                                          d="M10.7742 0.544177C10.7216 0.490607 10.6589 0.448056 10.5897 0.419008C10.5204 0.389961 10.4461 0.375 10.371 0.375C10.296 0.375 10.2216 0.389961 10.1524 0.419008C10.0832 0.448056 10.0205 0.490607 9.96786 0.544177C9.86314 0.65062 9.80444 0.793962 9.80444 0.943288C9.80444 1.09261 9.86314 1.23596 9.96786 1.3424L14.0565 5.43106H0.564496C0.490229 5.43073 0.416631 5.44511 0.347957 5.47339C0.279284 5.50168 0.216898 5.54329 0.164406 5.59583C0.111914 5.64837 0.0703566 5.71079 0.0421372 5.77949C0.0139179 5.84819 -0.00040395 5.9218 -2.81674e-07 5.99607C-2.81674e-07 6.31058 0.249984 6.56869 0.564496 6.56869H14.0565L9.96786 10.6497C9.74989 10.8753 9.74989 11.2386 9.96786 11.4561C10.0205 11.5097 10.0832 11.5522 10.1524 11.5813C10.2216 11.6103 10.296 11.6253 10.371 11.6253C10.4461 11.6253 10.5204 11.6103 10.5897 11.5813C10.6589 11.5522 10.7216 11.5097 10.7742 11.4561L15.8308 6.3995C15.8843 6.34771 15.9269 6.28569 15.9559 6.21713C15.985 6.14857 16 6.07486 16 6.00039C16 5.92591 15.985 5.85221 15.9559 5.78364C15.9269 5.71508 15.8843 5.65306 15.8308 5.60127L10.7742 0.544177Z"
                                          fill="#0066FF"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="partners_card">
                        <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/partners_swiper_star.svg"
                                 alt="icon">
                        </div>
                        <h3>Всероссийское <br>общество ветеранов</h3>
                        <a href="#">
                            <span>Подробнее</span>
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/blue_arrow.svg" alt="arrow"> -->
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="Group">
                                    <path id="Vector"
                                          d="M10.7742 0.544177C10.7216 0.490607 10.6589 0.448056 10.5897 0.419008C10.5204 0.389961 10.4461 0.375 10.371 0.375C10.296 0.375 10.2216 0.389961 10.1524 0.419008C10.0832 0.448056 10.0205 0.490607 9.96786 0.544177C9.86314 0.65062 9.80444 0.793962 9.80444 0.943288C9.80444 1.09261 9.86314 1.23596 9.96786 1.3424L14.0565 5.43106H0.564496C0.490229 5.43073 0.416631 5.44511 0.347957 5.47339C0.279284 5.50168 0.216898 5.54329 0.164406 5.59583C0.111914 5.64837 0.0703566 5.71079 0.0421372 5.77949C0.0139179 5.84819 -0.00040395 5.9218 -2.81674e-07 5.99607C-2.81674e-07 6.31058 0.249984 6.56869 0.564496 6.56869H14.0565L9.96786 10.6497C9.74989 10.8753 9.74989 11.2386 9.96786 11.4561C10.0205 11.5097 10.0832 11.5522 10.1524 11.5813C10.2216 11.6103 10.296 11.6253 10.371 11.6253C10.4461 11.6253 10.5204 11.6103 10.5897 11.5813C10.6589 11.5522 10.7216 11.5097 10.7742 11.4561L15.8308 6.3995C15.8843 6.34771 15.9269 6.28569 15.9559 6.21713C15.985 6.14857 16 6.07486 16 6.00039C16 5.92591 15.985 5.85221 15.9559 5.78364C15.9269 5.71508 15.8843 5.65306 15.8308 5.60127L10.7742 0.544177Z"
                                          fill="#0066FF"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="partners_card">
                        <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/partners_swiper_star.svg"
                                 alt="icon">
                        </div>
                        <h3>Международный совет русских немцев «Возрождение»</h3>
                        <a href="#">
                            <span>Подробнее</span>
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/blue_arrow.svg" alt="arrow"> -->
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="Group">
                                    <path id="Vector"
                                          d="M10.7742 0.544177C10.7216 0.490607 10.6589 0.448056 10.5897 0.419008C10.5204 0.389961 10.4461 0.375 10.371 0.375C10.296 0.375 10.2216 0.389961 10.1524 0.419008C10.0832 0.448056 10.0205 0.490607 9.96786 0.544177C9.86314 0.65062 9.80444 0.793962 9.80444 0.943288C9.80444 1.09261 9.86314 1.23596 9.96786 1.3424L14.0565 5.43106H0.564496C0.490229 5.43073 0.416631 5.44511 0.347957 5.47339C0.279284 5.50168 0.216898 5.54329 0.164406 5.59583C0.111914 5.64837 0.0703566 5.71079 0.0421372 5.77949C0.0139179 5.84819 -0.00040395 5.9218 -2.81674e-07 5.99607C-2.81674e-07 6.31058 0.249984 6.56869 0.564496 6.56869H14.0565L9.96786 10.6497C9.74989 10.8753 9.74989 11.2386 9.96786 11.4561C10.0205 11.5097 10.0832 11.5522 10.1524 11.5813C10.2216 11.6103 10.296 11.6253 10.371 11.6253C10.4461 11.6253 10.5204 11.6103 10.5897 11.5813C10.6589 11.5522 10.7216 11.5097 10.7742 11.4561L15.8308 6.3995C15.8843 6.34771 15.9269 6.28569 15.9559 6.21713C15.985 6.14857 16 6.07486 16 6.00039C16 5.92591 15.985 5.85221 15.9559 5.78364C15.9269 5.71508 15.8843 5.65306 15.8308 5.60127L10.7742 0.544177Z"
                                          fill="#0066FF"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="partners_card">
                        <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/partners_swiper_star.svg"
                                 alt="icon">
                        </div>
                        <h3>Всероссийское <br>общество ветеранов</h3>
                        <a href="#">
                            <span>Подробнее</span>
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/blue_arrow.svg" alt="arrow"> -->
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="Group">
                                    <path id="Vector"
                                          d="M10.7742 0.544177C10.7216 0.490607 10.6589 0.448056 10.5897 0.419008C10.5204 0.389961 10.4461 0.375 10.371 0.375C10.296 0.375 10.2216 0.389961 10.1524 0.419008C10.0832 0.448056 10.0205 0.490607 9.96786 0.544177C9.86314 0.65062 9.80444 0.793962 9.80444 0.943288C9.80444 1.09261 9.86314 1.23596 9.96786 1.3424L14.0565 5.43106H0.564496C0.490229 5.43073 0.416631 5.44511 0.347957 5.47339C0.279284 5.50168 0.216898 5.54329 0.164406 5.59583C0.111914 5.64837 0.0703566 5.71079 0.0421372 5.77949C0.0139179 5.84819 -0.00040395 5.9218 -2.81674e-07 5.99607C-2.81674e-07 6.31058 0.249984 6.56869 0.564496 6.56869H14.0565L9.96786 10.6497C9.74989 10.8753 9.74989 11.2386 9.96786 11.4561C10.0205 11.5097 10.0832 11.5522 10.1524 11.5813C10.2216 11.6103 10.296 11.6253 10.371 11.6253C10.4461 11.6253 10.5204 11.6103 10.5897 11.5813C10.6589 11.5522 10.7216 11.5097 10.7742 11.4561L15.8308 6.3995C15.8843 6.34771 15.9269 6.28569 15.9559 6.21713C15.985 6.14857 16 6.07486 16 6.00039C16 5.92591 15.985 5.85221 15.9559 5.78364C15.9269 5.71508 15.8843 5.65306 15.8308 5.60127L10.7742 0.544177Z"
                                          fill="#0066FF"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="show_more">Показать ещё</button>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($home['additionals_hide'] !== "Yes"): ?>
    <section class="more_information">
        <div class="container">
            <h2><?= $home['additionals_title'] ?></h2>
            <div class="information_cards">
                <?php foreach ($home['additionals'] as $additional): ?>
                    <div class="information_card">
                        <div class="hover_border"></div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/information_card_little_question.svg"
                             alt="question"
                             class="little_question">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/information_card_big_question.svg"
                             alt="question" class="big_question">
                        <div class="card_body">
                            <h3><?= $additional['title'] ?></h3>
                            <p><?= $additional['text'] ?></p>
                            <button type="button"><?= $additional['additionals_button']['title'] ?></button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php
get_footer();