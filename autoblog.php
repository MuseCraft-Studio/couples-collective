<?php
/*
Template Name: autoblog
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Creator</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a private page. Please leave" />
    
    <?php
    wp_head();
    ?>
</head>


<body data-page="autoblog">
    <!-- <section id="media-level"></section> -->
    <div id="standard-header">
        <?php
            get_header()
        ?>
    </div>
    <div id="full-page">
        <div class="auto-blog">
            <h1>AutoBlog</h1>
            <?php
            the_content();
            ?>  
        </div>
        <div class="standard-footer">
            <?php
            get_footer()
                ?>
        </div>
    </div>
    <script type="text/javascript"
        src="//cdn.callrail.com/companies/636674144/9a8ff257e0969e4278e2/12/swap.js"></script>
</body>

</html>