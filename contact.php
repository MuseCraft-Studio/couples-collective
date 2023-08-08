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
    <script>
        function showCouplesForm() {
            var couplesForm = document.getElementById('google-form-couples');
            var individualForm = document.getElementById('google-form-individuals');
            individualForm.style.display = 'none';
            couplesForm.style.display = 'block';
        }

        function showIndividualsForm() {
            var couplesForm = document.getElementById('google-form-couples');
            var individualForm = document.getElementById('google-form-individuals');
            individualForm.style.display = 'block';
            couplesForm.style.display = 'none';
        }
    </script>
</head>
<body data-page="contact">
<div id="standard-header">
        <?php
            get_header()
        ?>
    </div>
    <div id="contact">
        <div id="contact-one">
            <button class="fill-button" onclick="showCouplesForm()">Couples</button>
            <button class="outline-button-two" onclick="showIndividualsForm()">Individuals</button>
        </div>
        <div id="contact-two">
            <div class="title">Let's get in touch</div>
            <div class="tag">We have two easy ways you can get matched with a therapist:</div>
        </div>
        <ol id="contact-three">
            <li>
                <span class="bold-text">Call us now:</span> (510) 373-9995 | Leave us a message and we'll call you back in a timely manner.
            </li>
            <li>
                <span class="bold-text">Fill out our intake form below</span> for a personal response and we can match you with the right counselor. 
            </li>
        </ol>    

        <div id="contact-four">
            <div id="google-form-couples">
                [COUPLES FORM]
            </div>
            <div id="google-form-individuals">
                [INDIVIDUALS FORM]
            </div>
        </div>

        <div id="contact-five">
            <div class="call-now">
                Or call now  (510) 373-9995
            </div>
        </div>

        <div id="contact-six">
            <div class="flex-item">
                <div class="title">
                    Fees and Sessions
                </div>
                <div class="description">
                    <p>
                        Clients are expected to pay for each session at the time it is held or, if you prefer, you may pay in advance. Please contact us to discuss fees as they vary based on each therapist. 
                    </p>
                    <p>
                        We recommend an initial couples counseling session of 80 minutes. Subsequent sessions typically run 55 - 60 mins for couples, but can be adjusted to 80 upon request. 
                    </p>
                </div>
            </div>
            <div class="flex-item">
                <div class="title">
                    Payment methods
                </div>
                <div class="description">
                    <p>
                        Cash, check, HSA or FSA and credit cards are accepted. The Couples Collective does not take insurance directly, we do however provide a monthly superbill receipt of services rendered that can be submitted for reimbursement to your insurance carrier. 
                    </p>
                    <p>
                        Reduced fees are available upon approval depending on therapists availability and ability to accommodate.
                    </p>
                </div>
            </div>
            <div class="flex-item">
                <div class="title">
                    Policies
                </div>
                <div class="description">
                    <p>
                    Canceling of appointments must be done 24 hours in advance, or a full session charge is due. 
                    </p>
                    <p>
                    Legal and ethical responsibilities require private sessions remain confidential, no information will be released to others without written consent. Exceptions include, threat of endangering yourself, others or in the event of child or elder abuse.
                    </p>
                </div>
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
