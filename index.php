<!-- required file -->
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

<body data-page="blog-list">
    <!-- <section id="media-level"></section> -->
    <div id="standard-header">
        <?php
        get_header()
            ?>
    </div>
    <div id="blog-list">
        <div class="content">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
            <?php
            the_posts_pagination();
            ?>
        </div>
    </div>
    <div class="standard-footer">
        <?php
        get_footer()
            ?>
    </div>
    <script type="text/javascript"
        src="//cdn.callrail.com/companies/636674144/9a8ff257e0969e4278e2/12/swap.js"></script>
</body>

</html>