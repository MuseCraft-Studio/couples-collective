<?php
/*
Template Name: individuals
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Couples Collective - Services</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Services">
    <?php 
        wp_head();
    ?>
</head>


<body data-page="services">
    <!-- <section id="media-level"></section> -->
    <div id="standard-header">
        <?php
            get_header()
        ?>
    </div>
    <div class="services">
        <div id="services-one">
            <div class="flex-container">
                <div class="flex-item">
                    <div class="title">
                        Individual therapy
                    </div>
                    <div class="content">
                        <p>
                            We work with individuals to support each person's growth and life goals. In individual therapy, we use the EFT model to work together to build a better understanding of relationship and personal habitual patterns that no longer serve you and your aspirations to having relationships that you want.
                        </p>
                        <p>
                            <b>Is therapy working for you?</b>
                        </p>
                        <p>
                            One of the highest indicators for success in therapy is the rapport and relationship with your therapist. To determine if we would be a good fit, our relationship would start with a no-cost 20 minute phone consultation to determine if my style and areas of focus are aligned with what you are looking to address in your life.
                        </p>
                    </div>
                    <div class="get-started">
                        <a class="fill-button" href="/contact" target="_blank">Start intake form</a>
                    </div>
                </div>
                <div class="flex-item">
                    <div class="image"></div>
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
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Card-Big.svg" alt="card-big"/>
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