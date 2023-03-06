<?php get_header();

global $wp_query;
$curauth = $wp_query->get_queried_object();

/*
Template Name: Author Page
*/

?>
<?php 
$portfolio = new WP_Query(array(
            'post_type'     => 'author',
            'posts_per_page'=> -1
        ));
        ?>
<div class="author-section">
    <?php
        if( have_posts() ){
            ?>
            <div class="row">
            <?php
                while( $portfolio->have_posts() ){
                    ?>
                    <div class="<?php echo $class; ?>">
                        <?php $portfolio->the_post();?>
                        <?php the_author(); ?>
                        <?php the_author_description(); ?>
                    </div>
                    <?php
                }
            ?>
            </div>
            <?php
        }else{
            echo '<h1>No posts found!</h1>';
        }
    ?>
</div>

<?php get_footer(); ?>