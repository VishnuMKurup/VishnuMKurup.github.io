<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "kurupvishnu20@gmail.com";
    $subject = "Contact Form Submission: " . $subject;
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    $headers = "From: $email"; // Set the email sender

    if (mail($to, $subject, $messageBody, $headers)) {
        // Email sent successfully
        echo "Your message has been sent. Thank you!";
    } else {
        // Email sending failed
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
