<?php
/*
Template Name: team
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bay Area Couples Collective: Meet Our Team</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The Bay Area Couples Collective team is made up of experienced and passionate therapists who are dedicated to helping couples and individuals thrive. Learn more about our team and how we can help you." />
    <meta name="keywords"
        content="Bay Area Couples Collective, team, therapists, couples therapy, individual therapy, mental health" />

    <?php
    wp_head();
    ?>
</head>

<body data-page="team">
    <!-- <section id="media-level"></section> -->
    <div id="standard-header">
        <?php
        get_header()
            ?>
    </div>
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
            <div class="team-header">
                <div class="title">
                    Find the right match for you
                </div>
                <p>Our counselors offer a variety of expertise, whether you're looking for yourself or you and your
                    partner, we can find the right match for you.</p>
            </div>
            <div id="people">
            </div>
        </div>
    </div>
    <div style="margin-top: 16px; margin: 0;">
        <?php
        get_footer()
            ?>
    </div>
    <script type="text/javascript"
        src="//cdn.callrail.com/companies/636674144/9a8ff257e0969e4278e2/12/swap.js"></script>
</body>

</html>