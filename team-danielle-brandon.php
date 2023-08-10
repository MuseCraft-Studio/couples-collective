<?php
/**
* Template Name: team-danielle-brandon
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Couples Collective - Danielle Brandon, AMFT</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Danielle Brandon, AMFT">
    <?php 
    wp_head();
    ?>
</head>

<body data-page="team-individual">
    <!-- <section id="media-level"></section> -->
    <div id="standard-header">
        <?php
            get_header()
        ?>
    </div>
    <div id="team-individual">
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