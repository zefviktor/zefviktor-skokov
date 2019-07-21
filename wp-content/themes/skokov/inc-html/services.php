<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 22.03.19
 * Time: 17:12
 */
?>
<section id="services" class="services">
    <div class="container services__content">
        <a href="<?php echo home_url('/services', 'https'); ?>">
            <h2 class="services__content-title">
                <?php echo get_theme_mod( 'zef_content_services__general-title' ); ?>
            </h2>
        </a>
        <p class="services__content-subtitle">
            <?php echo get_theme_mod( 'zef_content_services__general-text' ); ?>
        </p>
        <div class="services__item-services">
            <?php require "item-services.php"; ?>
        </div>
    </div>
</section>
