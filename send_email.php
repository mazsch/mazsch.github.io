<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'aminshobeirie@gmail.com';
    $subject = 'Message from Portfolio Contact Form';
    $message_body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send email
    $headers = "From: $email";

    if (mail($to, $subject, $message_body, $headers)) {
        echo '<p>Your message has been sent successfully.</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
}
?>