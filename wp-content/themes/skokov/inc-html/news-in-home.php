

<section class="news">
    <div class="container news__content">
        <a href="<?php echo home_url('/news', 'https'); ?>">
            <h2 class="news__content-title">
                <?php echo get_theme_mod( 'zef_content_news__general-title' ); ?>
            </h2>
        </a>

        <p class="news__content-subtitle">
            <?php echo get_theme_mod( 'zef_content_news__general-text' ); ?>
        </p>
        <div class="news__item">
        </div>
    </div>
    <div class="news__post">
        <div class="container news__post-posts">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => '3',
            );
            $query = new WP_Query($args);
            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <?php require "news-post.php"; ?>
                    <?php
                }
            }
            else {}
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>


