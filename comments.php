<?php
if (comments_open()) {
    comment_form(
        array(
            'class_form' => '',
            'title_reply' => '',
            'title_reply_before' => '<p>',
            'title_reply_after' => '</p>',
            'label_submit' => 'Post',
            'comment_field' => '<textarea id="comment-area" name="comment" placeholder="Leave a comment..." rows=10 required="required"></textarea>',
        )
    );
}
?>

<div id="comments-title">
    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comment.png" alt="comments icon" /></div>
    <div>comments </div>
    <div id="comment-number">
        <?php
        if (have_comments()) {
            echo get_comments_number();
        } else {
            echo '0';
        }
        ?>
    </div>
</div>

<div id="comment-list">
    <?php
    wp_list_comments(
        array(
            'avatar_size' => 65,
            'style' => 'div',
        )
    );
    ?>
</div>