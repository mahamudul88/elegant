<article <?php post_class('post-items pb-4 col-lg-4 col-md-6'); ?>>
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-size'); ?></a>
    </div>
    <div class="post-text-wrap">
        <div class="post-title">
            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
        </div>
        <div class="post-excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>