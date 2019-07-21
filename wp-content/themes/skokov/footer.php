<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skokov
 */

?>


<footer class="footer footer__background">
    <div class="container">
        <div class="footer__content">
            <h4 class="footer__content-text">
                <?php echo get_theme_mod( 'zef_content_footer__general-text' ); ?>
            </h4>
            <div class="item-social">
                <?php foreach(getWeAreInSocial() as $weAreInSocial): ?>
                    <a href="<?php echo $weAreInSocial['link']?>" class="item-social__icon">
                        <div class="item-social__text">
                            <?php echo $weAreInSocial['icon']?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>
</html>
