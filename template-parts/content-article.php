
<div>
    <span><?php the_date() ?></span>
    <span><?php the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>'); ?></span>
    <span><?php comments_number() ?></span>
    <?php
        the_content();
    ?>
    <?php
        comments_template('/comments.php', true);
    ?>
</div>