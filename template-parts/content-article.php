
<div>
    <span style="margin-right: 16px;"><?php the_date() ?></span>
    <span><?php comments_number() ?></span>
    <?php
        the_content();
    ?>
    <?php
        comments_template('/comments.php', true);
    ?>
</div>