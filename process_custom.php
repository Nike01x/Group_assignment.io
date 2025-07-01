<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$template_type = $_POST['template-type'];
$purpose = $_POST['purpose'];
$requirements = $_POST['requirements'];
$deadline = $_POST['deadline'];
$budget = $_POST['budget'];

// Basic validation
if (empty($name) || empty($email) || empty($template_type) || empty($requirements)) {
    die("Error: Required fields are missing.");
}

// Handle file upload (if any)
if (!empty($_FILES['reference']['name'])) {
    $upload_dir = "uploads/";
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    $file_name = $_FILES['reference']['name'];
    $file_tmp = $_FILES['reference']['tmp_name'];
    $file_path = $upload_dir . basename($file_name);
    
    if (move_uploaded_file($file_tmp, $file_path)) {
        $file_uploaded = true;
    } else {
        $file_uploaded = false;
    }
}

// Send email (example)
$to = "2023830594@student.uitm.edu.my"; // Replace with your email
$headers = "From: $email";
$email_subject = "New Custom Order: $template_type";
$email_body = "Name: $name\nEmail: $email\nPhone: $phone\n\nTemplate Type: $template_type\nPurpose: $purpose\nRequirements: $requirements\nDeadline: $deadline\nBudget: $budget";

if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Thank you! Your custom order request has been submitted.";
} else {
    echo "Error: Request could not be sent.";
}
?>