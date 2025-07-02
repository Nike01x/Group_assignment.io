<?php
require_once 'db_connection.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Basic validation
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    die("Error: All fields are required.");
}

try {
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, subject, message) 
                           VALUES (:name, :email, :subject, :message)");
    
    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);
    
    // Execute the query
    $stmt->execute();
    
    // Send email notification (optional)
    $to = "2023830594@student.uitm.edu.my";
    $headers = "From: $email";
    $email_subject = "New Contact Form: $subject";
    $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    mail($to, $email_subject, $email_body, $headers);
    
    echo "Thank you! Your message has been sent and saved.";
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
