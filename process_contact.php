<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "pavankhotkar3@gmail.com"; // Replace with your desired recipient email address
    $subject = "New Contact Form Submission";
    $message_body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nMessage:\n$message";

    // Use appropriate headers
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        // Redirect to a thank you page or display a success message
        header("Location: thank_you.html");
        exit();
    } else {
        // Handle the case where mail() fails
        echo "Error sending the message. Please try again later.";
    }
}
?>
