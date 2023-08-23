<?php
/*
Template Name: couples
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Couples Collective - Couples Service</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Couples Service">
    <?php 
        wp_head();
    ?>
</head>


<body data-page="couples">
    <!-- <section id="media-level"></section> -->
    <div id="standard-header">
        <?php
            get_header()
        ?>
    </div>
    <diu class="services">
        <div id="services-two">
            <div class="flex-container">
                <div class="flex-item">
                    <div class="image"></div>
                </div>
                <div class="flex-item">
                    <div class="title">
                        Couples therapy
                    </div>
                    <div class="content">
                        <p>Do you feel lonely, unacknowledged, or stuck in your partnership? When you try to communicate, does it seem like you're talking to a wall—as if your feelings don't really matter? Do you ever think you are not good enough—that you can never catch a break or get it right?</p>
                        <p>Perhaps you lack depth in your relationship and want to break down emotional barriers and enhance your physical connection. Conversely, maybe an act of infidelity has fractured your trust, and you want to know if there is still any hope for your marriage. As a relationship evolves, it's natural for couples to run into unexpected challenges. For instance, you may be having trouble coordinating your communication or parenting styles in a blended family dynamic. Or your partner may have put up emotional barriers, and you don't know how to make a connection without feeling criticized or misunderstood for trying. And if you are recovering from infidelity, it can be extremely difficult managing the intense mix of emotions in a way that promotes internal healing.</p>
                        <p>We also see <em><a href="/welcome/individuals">individuals</a></em>.</p>
                    </div>
                    <a class="fill-button" href="https://forms.gle/PwZLNmbNeMNwkArAA" target="_blank">Contact us</a>
                </div>
            </div>
        </div>
        <div id="services-four">
            <div class="container">
                <div class="flex-item">
                    <div class="svg-text-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Clock.svg" alt="clock"/>
                        <div class="title">
                            Fees and Sessions
                        </div>
                        <div class="description">
                            <p>
                                Clients are expected to pay for each session at the time it is held or, if you prefer, you may pay in advance. Please contact us to discuss fees as they vary based on each therapist.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-item">
                <div class="svg-text-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Card.svg" alt="card"/>
                        <div class="title">
                            Payment methods
                        </div>
                        <div class="description">
                            <p>
                                Cash, check, HSA or FSA and credit cards are accepted. The Couples Collective does not accept insurance directly. We do, however, provide a monthly superbill of services rendered that may be submitted for reimbursement to your insurance carrier.
                            </p>
                            <p>
                                Reduced fees are available upon approval depending on clinician availability and ability to accommodate.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-item">
                    <div class="svg-text-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Clipboard.svg" alt="clipboard"/>
                        <div class="title">
                            Policies
                        </div>
                        <div class="description">
                            <p>
                                Our practice requires a 24-hour notice for all cancellations. The full session fee will apply if a timely cancellation is not provided.
                            </p>
                            <p>
                                Legal and ethical responsibilities require that private sessions remain confidential. Information will not be released to others without written consent. Exceptions include: threat of endangering yourself, others or in the event of child or elder abuse.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="services-three">
            <div class="call-now">
                Or call now  (510) 373-9995
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