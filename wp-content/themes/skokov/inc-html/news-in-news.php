
    <div class="news__post">
        <div class="container news__post-posts">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => '6',
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


