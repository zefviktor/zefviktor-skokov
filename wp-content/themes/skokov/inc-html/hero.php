<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 22.03.19
 * Time: 17:12
 */
?>



<div class="container hero__content">
    <div class="hero__content-item">
        <h1 class="hero__title">
            <?php echo get_theme_mod( 'zef_content_hero__general-title' ); ?>
        </h1>
        <p class="hero__text">
            <?php echo get_theme_mod( 'zef_content_hero__general-text' ); ?>
        </p>
        <div class="hero__icon">
            <div class="hero__icon-button">
                <a class="button__icon button__text" onclick="smoothScroll('services')">
                    <h6 class="button__text">
                        <?php echo get_theme_mod( 'zef_content_hero__button-one' ); ?>
                    </h6>
                </a>
            </div>
            <div class="hero__icon-button">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button__icon">
                    <h6 class="button__text">
                        <?php echo get_theme_mod( 'zef_content_hero__button-two' ); ?>
                    </h6>
                </a>
            </div>
        </div>
    </div>
</div>