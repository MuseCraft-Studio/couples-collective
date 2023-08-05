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
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "na1",
    portalId: "42794038",
    formId: "c8d4e5f5-1e29-4646-8302-a40d835135ff"
  });
</script>
    <?php 
        wp_head();
    ?>
</head>
<body data-page="contact">
<div id="standard-header">
        <?php
            get_header()
        ?>
    </div>
    <div id="contact">
        <?php
            the_content()
        ?>
    </div>        
    <div class="standard-footer">
        <?php
            get_footer()
        ?>
    </div>
</body>

</html>
