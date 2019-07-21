<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 22.03.19
 * Time: 17:12
 */
?>
<section class="contact-us contact-us__background">
    <div class="container">
        <p class="contact-us__title">
            <?php echo get_theme_mod( 'zef_content_contact-us__general-title' ); ?>
        </p>
        <div class="contact-us__icon">
            <div class="contact-us__icon-button">
                <a href=<?php echo esc_url( home_url( '/' ) ); ?>" class="button__icon">
                <h6 class="button__text">
                    <?php echo get_theme_mod( 'zef_content_contact-us__button-one' ); ?>
                </h6>
                </a>
            </div>
        </div>
    </div>
</section>
