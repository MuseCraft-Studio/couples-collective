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
    </div>
    <?php if ( isset( $_GET['success'] ) && $_GET['success'] === 'true' ) : ?>
    <div class="success-message">
        Thank you for your submission! We will get back to you soon.
    </div>
<?php endif; ?>

    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
    <input type="hidden" name="action" value="process_contact_form">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="4" required></textarea>

    <input type="submit" value="Submit">
</form>
        

    <?php
        get_footer()
    ?>
</body>

</html>
