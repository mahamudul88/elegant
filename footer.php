
<div class="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-items">
                    <?php dynamic_sidebar('footerwidget-1'); ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-items">
                    <?php dynamic_sidebar('footerwidget-2'); ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-items">
                    <?php dynamic_sidebar('footerwidget-3'); ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-items">
                    <?php dynamic_sidebar('footerwidget-4'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy-right text-center">
        <?php the_field('copy_right_text', 'options'); ?>
    </div>
</div>





<?php wp_footer(); ?>
</body>
</html>