<div class="comments">
    <h2 class="comment-title">
        <?php 
            $rreco_cn = get_comments_number();
            if(1==$rreco_cn){
                _e("1 comment", "elegant");
            }else{
                echo $rreco_cn . " " . __("comments", "elegant");
            }
        ?>
    </h2>
    <div class="comment-list">
        <?php
            wp_list_comments();
        ?>
    </div>
    <div class="comment-pagination">
        <?php  
        the_comments_pagination(array(
            'prev_text' =>"<".__('previous', 'elegant'),
            'next' =>">".__('next', 'elegant')
        ));
        ?>
    </div>
    <div class="comment-form">
        <?php comment_form(array()); ?>        
    </div>
</div>