<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "khotkarpavan3@gmail.com";
    $subject = "New Contact Form Submission - $subject";
    $message_body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    // Use appropriate headers
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send the email
    mail($to, $subject, $message_body, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>