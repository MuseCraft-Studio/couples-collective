<?php
    if (!have_comments()) {
        echo "Leave a comment";
    } else {
        echo get_comments_count(). " Comments";
    }
?>