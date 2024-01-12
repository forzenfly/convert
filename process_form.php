<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $to = "khotkarpavan3@gmail.com";
    $subject = "New Contact Form Submission";
    $message = "First Name: $fname\nLast Name: $lname\nPhone Number: $phone\nEmail: $email";

    mail($to, $subject, $message);

    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>

