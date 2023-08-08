<?php
/*
Template Name: contact-fail
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact - Fail">
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
        <div>
        Please call us at <b>(510) 373-9995</b> to schedule a session or use the form below.

        </div>
        <div class="container">
            <h1>Hmmmm...</h1>
            <p>Something went wrong, please try filling out this form again</p>
            <form action="<?php echo get_stylesheet_directory_uri(); ?>/mail.php" method="POST">
                <label for="name">First and Last Name</label>
                <input type="text" name="name" id="name" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" onInput="this.value = phoneFormat(this.value)">
                <label for="message">What are your goals for individual therapy?</label>
                <textarea name="message" rows="5" required></textarea>
                <label for="request">Let us know if you have any preferences in therapists or would like to requests one by name</label>
                <textarea name="request" rows="5"></textarea>
                <input type="submit" class="fill-button" value="Send">
            </form>

        </div>
    </div>
    <div class="standard-footer">
        <?php
            get_footer()
        ?>
    </div>
</body>

</html>
