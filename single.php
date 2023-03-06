<?php get_header() ?>
<?php while( have_posts() ) : the_post(); ?>
<div class="single-page-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto pt-5">
                <div class="single-top">
                    <div class="single-date&cat d-flex gap-4 align-items-center">
                        
                        <?php 

                            $cat = get_the_category();
                            $cat_link = get_category_link($cat[0]->term_id);
                        ?>
                        <?php if( $cat ) : ?>
                        <div class="single-cat">
                            <a href="<?php echo $cat_link ?>">
                                <?php echo $cat[0]->name; ?>
                            </a>
                        </div>
                        <?php endif; ?>
                        
                        <div class="single-date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z"/></svg>
                        <span><?php echo get_the_date('F d Y'); ?></span>
                        </div>
                    </div>
                    <div class="single-title"><h1><?php the_title(); ?></h1></div>
                    <div class="single-excerpt"><?php the_excerpt(); ?></div>
                </div>
            </div>
        </div>
        <div class="single-thumbnail">
            <?php  
                if(has_post_thumbnail()){
                    the_post_thumbnail('extra-larze');
                }
            ?>
            
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="single-content pb-5"><?php the_content(); ?></div>
                <?php wp_link_pages(); ?>
                <?php if ( !post_password_required() && comments_open() ): ?>
                    <div class="single-comment-sec">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>