<?php get_header(); ?>

<div class="loop-sec">
    <div class="container">
        <h1 class="text-center"><?php echo esc_html__( 'Search for: ', 'elegant' ) . get_search_query(  ); ?></h1>
        <?php get_search_form(  ); ?>
        <div class="row">
            <?php 
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
    </div>
</div>

<?php get_footer(); ?>