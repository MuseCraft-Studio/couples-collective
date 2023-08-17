<?php
/**
* Template Name: team-meryl-haggege
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Couples Collective - Meryl Haggege, AMFT</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meryl Haggege, AMFT">
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
        <div id="team-one">
            <div class="wrapper">
                <div class="circle-container">
                    <div class="first-column">
                        <div class="circle-one"></div>
                        <div class="circle-two"></div>
                    </div>
                    <div class="second-column">
                        <div class="circle-three"></div>
                    </div>
                </div>
            <?php 
                the_content()
            ?>
            </div>
        </div>
    </div>
    <div class="standard-footer">
        <?php
            get_footer()
        ?>
    </div>
</body>

</html>