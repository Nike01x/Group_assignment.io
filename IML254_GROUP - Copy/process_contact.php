<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Basic validation
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    die("Error: All fields are required.");
}

// Send email (example)
$to = "2023830594@student.uitm.edu.my"; // Replace with your email
$headers = "From: $email";
$email_subject = "New Contact Form: $subject";
$email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Thank you! Your message has been sent.";
} else {
    echo "Error: Message could not be sent.";
}
?>