<!DOCTYPE html>
<html lang="en">

<head>
    <title>Couples Collective - Blog</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog">
    <?php 
    wp_head();
    ?>
</head>

<body data-page="blog-post">
    <div>Hi, this is a blog post</div>
    <div id="standard-header">
        <?php
            get_header()
        ?>
    </div>
    <div id="blog-post">
        <div class="content">
            <?php
                if (have_posts() ) {
                    while (have_posts() ) {
                        the_post();
                        get_template_part('template-parts/content', 'article');
                    }
                }
            ?>
        </div>
    </div>
    <div class="standard-footer">
        <?php
            get_footer()
        ?>
    </div>
</body>

</html>