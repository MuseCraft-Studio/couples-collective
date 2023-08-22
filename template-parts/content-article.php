
<div>
    <span><?php the_date() ?></span>
    <span><?php the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>'); ?>
</div>
<?php
    the_content();
?>