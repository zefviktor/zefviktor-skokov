<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 22.03.19
 * Time: 17:12
 */
?>




<div id="news" class="item-post">
    <?php echo get_the_post_thumbnail( $id, '', array('class' => 'item-post__icon') ); ?>
    <div class="item-post__item">
        <div class="item-post__item-content">
            <div class="item-post__item-content-wrapper">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="item-post__item-content-title">
                        <?php the_title(); ?>
                    </h2>
                </a>
                <h6 class="item-post__item-content-text">
                    <?php $content = get_the_content();
                    echo wp_trim_words( $content , '15' ); ?>
                </h6>
                <h6 class="item-post__item-content-data">
                    <?php the_time('F jS, Y'); ?>
                </h6>
            </div>
        </div>
        <div>
            <div class="item-post__item-top">
            </div>
            <div class="item-post__item-right">
            </div>
            <div class="item-post__item-bottom">
            </div>
            <div class="item-post__item-left">
            </div>
        </div>
    </div>
</div>