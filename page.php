<?php get_header(); ?>
<div class="page-sec">
    <div class="container">
        
        <?php while(have_posts()) : the_post(); ?>
            <div class="page-inner">
                <?php the_post_thumbnail('extra-larze'); ?>
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        
    </div>
</div>

<?php get_footer(); ?>
