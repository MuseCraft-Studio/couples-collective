<?php
/*
Template Name: contact
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact">
    <?php 
        wp_head();
    ?>
</head>
<body data-page="contact">

    <?php
        get_header()
    ?>

<?php
    the_content()
?>

    <?php
        get_footer()
    ?>
</body>

</html>
