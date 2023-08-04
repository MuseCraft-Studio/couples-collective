<?php
/*
Template Name: contact
*/

?>
<?php 
        wp_head();
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
    <div id="contact">
        <?php
            the_content()
        ?>
        <?php echo apply_shortcodes( '[hubspot type="form" portal="42794038" id="c8d4e5f5-1e29-4646-8302-a40d835135ff"]' ); ?>
    </div>        
    <?php
        get_footer()
    ?>
</body>

</html>
