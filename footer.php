<?php $settings = get_field("settings", "option") ?>

<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="d-flex align-items-center footer_main">
            <div class="d-flex flex-column">
                <img src="<?php echo $settings['site_logo']['url'] ?>" alt="logo" class="footer_logo">
                <a href="#" class="footer_email">info@sibniiau.ru</a>
                <ul class="footer_item">
                    <?php foreach ($settings['adresses'] as $adress): ?>
                        <li><?= $adress['adress'] ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="footer_socials d-flex align-items-center">
                    <?php foreach ($settings['socials'] as $social): ?>
                        <a href="<?php echo $social['link']['url'] ?>">
                            <img src="<?php echo $social['image']['url'] ?>" alt="<?= $social['link']['title'] ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php if (!empty($settings['phones']) && is_array($settings['phones'])): ?>
                <?php
                $reversed_phones = array_reverse($settings['phones']); // Ma'lumotlarni teskari tartibga keltiramiz
                $chunks = array_chunk($reversed_phones, 4); // Har 4 ta elementni bo‘laklarga bo‘lish
                ?>
                <?php foreach ($chunks as $chunk): ?>
                    <ul class="footer_item">
                        <?php foreach ($chunk as $phone): ?>
                            <li><?php echo esc_html($phone['title']); ?>: <?php echo esc_html($phone['phone']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
            <?php endif; ?>

            <ul class="footer_item">
                <li>Сибирский НИИ <br>
                    Автоматизации и Управления,<br><br>
                    ИНН <?= $settings['inn'] ?> <br>
                    ОГРН <?= $settings['ogrn'] ?>
                </li>
            </ul>
        </div>
        <div class="footer_bottom"><?= $settings['privacy_policy'] ?></div>
    </div>
</footer>

</div>

<div class="modal_overlay"></div>
<!-- Juqery -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/jquery-3.6.0.min.js"></script>

<!-- Bootstrap -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>

<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/scripts.js"></script>
</body>

</html>