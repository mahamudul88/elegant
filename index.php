<?php get_header(); ?>

<!-- search-sec -->
<div class="search-sec">
    <div class="container">
        <div class="search-items-wrap">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
<!-- loop-sec -->
<div class="loop-sec">
    <div class="container">
        <div class="row">
            <?php wp_body_open();
                if(have_posts()){
                    while(have_posts()){
                        the_post(); 
                        get_template_part('post-formet/postcard', get_post_format());
                    }
                    ?>
                    <?php 
                }else{
                    echo '<h1> no post found!!!</h1>';
                }
            ?>
        </div>
        <?php the_posts_pagination(); ?>
    </div>
</div>

<div id="preloader"></div>

<?php get_footer(); ?>