<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package skokov
 */

get_header();
?>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post">
                    <div class="post__icon">
                        <div class="post__icon-img">
                            <?php the_post_thumbnail();?>
                        </div>
                    </div>
                    <div class="post__content">
                        <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">
                            <h6 class="item-post__item-content-title">
                                <?php the_title(); ?>
                            </h6>
                        </a>
                        <div class="post__content-top"></div>
                    </div>
                </div>
                <div class="post__content-text">
                    <?php the_content(); ?>
                </div>
                <?php if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif; ?>
            <?php endwhile;
                the_posts_navigation();
            else :
                get_template_part( 'template-parts/content', 'none' );
                ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>





        <section class="d-flex blog container">
            <div class="blog__posts">
                <div class="blog__posts-post">

                </div>
            </div>

        </section>
    </main>
<?php
get_footer();
?>