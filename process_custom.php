<?php
require_once 'db_connection.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'] ?? null;
$template_type = $_POST['template-type'];
$custom_type = $_POST['custom-type'] ?? null;
$purpose = $_POST['purpose'] ?? null;
$requirements = $_POST['requirements'];
$deadline = $_POST['deadline'] ?? null;
$budget = $_POST['budget'] ?? null;
$reference_files = null;

// Basic validation
if (empty($name) || empty($email) || empty($template_type) || empty($requirements)) {
    die("Error: Required fields are missing.");
}

// Handle file upload
if (!empty($_FILES['reference']['name'])) {
    $upload_dir = "uploads/";
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    $file_name = uniqid() . '_' . basename($_FILES['reference']['name']);
    $file_path = $upload_dir . $file_name;
    
    if (move_uploaded_file($_FILES['reference']['tmp_name'], $file_path)) {
        $reference_files = $file_path;
    }
}

try {
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO custom_orders 
                          (name, email, phone, template_type, custom_type, purpose, 
                           requirements, deadline, budget, reference_files) 
                          VALUES 
                          (:name, :email, :phone, :template_type, :custom_type, :purpose, 
                           :requirements, :deadline, :budget, :reference_files)");
    
    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':template_type', $template_type);
    $stmt->bindParam(':custom_type', $custom_type);
    $stmt->bindParam(':purpose', $purpose);
    $stmt->bindParam(':requirements', $requirements);
    $stmt->bindParam(':deadline', $deadline);
    $stmt->bindParam(':budget', $budget);
    $stmt->bindParam(':reference_files', $reference_files);
    
    // Execute the query
    $stmt->execute();
    
    // Send email notification (optional)
    $to = "2023830594@student.uitm.edu.my";
    $headers = "From: $email";
    $email_subject = "New Custom Order: $template_type";
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\n\nTemplate Type: $template_type\nPurpose: $purpose\nRequirements: $requirements\nDeadline: $deadline\nBudget: $budget";
    
    mail($to, $email_subject, $email_body, $headers);
    
    echo "Thank you! Your custom order request has been submitted and saved.";
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
