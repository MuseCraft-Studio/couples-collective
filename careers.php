<?php
/*
Template Name: careers
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bay Area Couples Collective: Careers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The Bay Area Couples Collective is a welcoming community for all individuals, regardless of relationship status. We offer a variety of resources to help individuals connect with others, learn about relationships, and grow personally." />
    <meta name="keywords"
        content="Bay Area Couples Collective, individuals, community, resources, events, relationships, personal growth" />

    <?php
    wp_head();
    ?>
</head>


<body data-page="careers">
    <!-- <section id="media-level"></section> -->
    <div id="standard-header">
        <?php
        get_header()
            ?>
    </div>
    <div id="full-page">
        <div id="work-with-us">
            <div class="about">
                <div class="title">About our practice</div>
                <p>Our practice offers in person and telehealth sessions to clients residing in California. Our two
                    office locations make it amenable for clients to be able to attend sessions in person in San
                    Francisco and the Bay Area.</p>
            </div>
            <div class="flex-container-left">
                <div class="flex-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers/rock.jpg"
                        alt="woman holding heart shaped rock" />
                </div>
                <div class="flex-item">
                    <div class="title">Requirements for our candidates</div>
                    <ul>
                        <li>As we primarily utilize Emotionally Focused Therapy (EFT), we require our associates and
                            licensed clinicians to have completed an EFT externship before working with our practice. An
                            interest in making EFT the focus of couples work is also essential.</li>
                        <li>The clinician must be an associate or licensed clinician in the state of California in good
                            standing with their board.</li>
                        <li>The clinician must hold their own personal liability insurance.</li>
                        <li>Associates and Licensed clinicians are expected to hold availability for client sessions for
                            at least one evening per week, and to be available for in-person sessions at our East Bay
                            Oakland location at least two days per week. Hybrid options are available outside of those
                            limitations.</li>
                        <li>The clinician must be available to hold a caseload of at least 10 couples.</li>
                    </ul>
                </div>
            </div>
            <div class="about">
                <div class="title">Other information</div>
                <ul>
                    <li>Associate clinicians will be offered weekly supervision consisting of triadic sessions, with
                        individual check-ins as needed.</li>
                    <li>Licensed clinicians will have individual check-ins as needed.</li>
                </ul>
            </div>
            <div>
                <p>If you're interested in applying for a position with The Couples Collective, we encourage you to
                    complete our form as the beginning of the application process. Our intake coordinator will respond
                    to you within 2-3 business days after your form has been submitted.</p>
                <div class="interest-form">
                    <?php
                    echo do_shortcode('[gravityform id="2" title="true"]');
                    ?>
                </div>
            </div>
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