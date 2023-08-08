<?php
// $success_page_title = 'success'; // Replace with the actual title of your success page
// $success_page = get_page_by_title($success_page_title);

// $failure_page_title = 'failure';
// $failure_page = get_page_by_path($failure_page_title);

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mailheader = "From: ".$name."<".$email.">\r\n";
    
    $recipient = "themusecrafter@gmail.com";
    
    if (mail($recipient, $subject, $message, $mailheader)) {
        header("Location: success");
        exit;
    } else {
        header("Location: failure");
        exit;

    }
} else {
    header("Location: failure");
    exit;
}

?>