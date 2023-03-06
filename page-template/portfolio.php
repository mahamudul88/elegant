<?php 
/* 
Template Name: portfolio
*/
get_header();
?>


<div class="portfolio-sec">
    <div class="container">
        <div class="portfolio-title">
            <h2>Portfolio Section</h2>
        </div>
        <div class="row portfolio-item-wrapper">
            <?php
            $folio_item = new WP_Query(array(
                'post_type'      => 'portfolio',
                'posts_per_page' => -1
            )); 
            while($folio_item->have_posts()) : $folio_item->the_post(); ?>
            <article class="col-lg-4 col-md-6 col-sm-12">
                <div class="portfolio-items">
                    <div class="portfolio-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="portfolio-text">
                        <div class="p-hading">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="p-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>