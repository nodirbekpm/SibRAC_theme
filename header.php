<?php
$settings = get_field("settings", "option") ;
$menu_items = wp_get_nav_menu_items('header-menu');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Шрифты -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/fonts/font.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/main.css">
    <title>Сибирский НИИ Автоматизации и Управления</title>
    <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div class="wrapper">

    <div class="hero">
        <!-- header -->
        <header class="header" id="header">
            <div class="container">
                <div class="header_block">
                    <div class="header_logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo $settings['site_logo']['url'] ?>" alt="logo">
                        </a>
                    </div>
                    <!-- hamburger_mobile -->
                    <div class="hamburger_menu_wrapper">
                        <a href="#" class="btn login_btn">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/login_white.svg" alt="login">
                            Войти
                        </a>
                        <a href="#" class="hamburger_menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37"
                                 fill="none">
                                <path d="M17.5233 28.9932H32.5233M6.27332 19.3158H32.5233M17.5233 9.63837H32.5233"
                                      stroke="#0066FF" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <ul class="header_menus">
                            <span class="close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                     fill="none">
                                    <path d="M24 24L16 16M16 16L8 8M16 16L24 8M16 16L8 24" stroke="#0066FF"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        <?php foreach ($menu_items as $item) : ?>
                            <li><a href="<?php echo esc_url($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
                        <?php endforeach; ?>
                        <li class="last_li">
                            <div class="d-flex header_right">
                                <a href="#" class="btn login_btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/login_white.svg" alt="login">
                                    Войти
                                </a>
                                <select name="" id="" class="language_selectors">
                                    <option value="RU" selected>RU</option>
                                    <option value="ENG">ENG</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                    <div class="header_right_wrapper">
                        <div class="d-flex header_right">
                            <select name="" id="" class="language_selectors">
                                <option value="RU" selected>RU</option>
                                <option value="ENG">ENG</option>
                            </select>
                            <a href="#" class="btn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/login_white.svg" alt="login">
                                Войти
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>