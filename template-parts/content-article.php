
<div>
    <span><?php the_date() ?></span>
    <span><?php the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>'); ?>
    <span><i class="fa fa-comment"></i><?php comments_number()?></span>
</div>
<?php
    the_content();
?>

<?php
comments_template();
?>