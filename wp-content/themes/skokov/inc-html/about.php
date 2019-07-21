<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 22.03.19
 * Time: 17:12
 */
?>
<section id="about-us" class="about-us container">
    <a href="<?php echo home_url('/about', 'https'); ?>">
        <h2  class="about-us__title">
            <?php echo get_theme_mod( 'zef_content_about-us__general-title' ); ?>
        </h2>
    </a>
    <p class="about-us__subtitle">
        <?php echo get_theme_mod( 'zef_content_about-us__general-text' ); ?>
    </p>
    <div class="about-us__content-col">
        <div class="about-us__content-row">
            <div class="about-us__content-row-item">
                <h3 class="main__block-title">
                    <?php echo get_theme_mod( 'zef_content_what-we-do__general-title' ); ?>
                </h3>
                <p class="main__block-text-dark">
                    <?php echo get_theme_mod( 'zef_content_what-we-do__general-text' ); ?>
                </p>
            </div>
            <div class="about-us__content-row-item">
                <h3 class="main__block-title">
                    <?php echo get_theme_mod( 'zef_content_our-clients__general-title' ); ?>
                </h3>
                <div id="carouselExampleIndicators" class="main carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="about-us__content carousel-item active">
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-1.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-2.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-3.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-4.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-5.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-6.png" height="185" width="185" alt="partners"/>
                        </div>
                        <div class="about-us__content carousel-item">
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-1.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-2.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-3.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-4.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-5.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-6.png" height="185" width="185" alt="partners"/>
                        </div>
                        <div class="about-us__content carousel-item">
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-1.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-2.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-3.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-4.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-5.png" height="185" width="185" alt="partners"/>
                            <img class="about-us__content-icon" src="<?php echo Q_IMG_DIR; ?>/icon-clients-6.png" height="185" width="185" alt="partners"/>
                        </div>
                    </div>
                    <ol class="main__carousel">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="main__carousel-item active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="main__carousel-item"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="main__carousel-item"></li>
                    </ol>
                </div>
            </div>
        </div>
        <div>
            <h3 class="main__block-title">
                <?php echo get_theme_mod( 'zef_content_our-team__general-title' ); ?>
            </h3>
            <div class="about-us__content-item-persons">
                <?php require "item-persons.php"; ?>
            </div>
        </div>
    </div>
</section>
