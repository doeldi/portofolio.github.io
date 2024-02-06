<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set your email address where you want to receive emails
    $to = "ahadi020608@gmail.com";

    // Set the email subject
    $subject = "New Contact Form Submission from $name";

    // Build the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $body);

    // Redirect the user to index.html after form submission
    header("Location: index.html");
    exit();

}
?>
