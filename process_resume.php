<?php
// process_resume.php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Basic validation
        $required = ['name', 'email', 'title', 'summary', 'skills'];
        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                throw new Exception("Please fill in all required fields.");
            }
        }

        // Prepare data for database
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $linkedin = $_POST['linkedin'] ?? '';
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $skills = $_POST['skills'];
        $style = $_POST['style'];
        $color = $_POST['color'] ?? 'blue';
        $notes = $_POST['notes'] ?? '';
        
        // Process experience data
        $experience = [];
        if (isset($_POST['experience']) && is_array($_POST['experience'])) {
            foreach ($_POST['experience'] as $exp) {
                $experience[] = [
                    'title' => $exp['title'],
                    'company' => $exp['company'],
                    'dates' => $exp['dates'],
                    'description' => $exp['description']
                ];
            }
        }
        
        // Process education data
        $education = [];
        if (isset($_POST['education']) && is_array($_POST['education'])) {
            foreach ($_POST['education'] as $edu) {
                $education[] = [
                    'degree' => $edu['degree'],
                    'institution' => $edu['institution'],
                    'dates' => $edu['dates'],
                    'details' => $edu['details'] ?? ''
                ];
            }
        }
        
        // Handle file upload
        $filePath = '';
        if (isset($_FILES['resume_file']) && $_FILES['resume_file']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/resumes/';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
            $fileName = time() . '_' . basename($_FILES['resume_file']['name']);
            $targetPath = $uploadDir . $fileName;
            
            if (move_uploaded_file($_FILES['resume_file']['tmp_name'], $targetPath)) {
                $filePath = $targetPath;
            }
        }
        
        // Insert into database
        $stmt = $conn->prepare("INSERT INTO resume_orders 
            (name, email, phone, address, linkedin, professional_title, summary, 
             experience, education, skills, style, color, notes, file_path, submission_date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        
        $stmt->execute([
            $name, $email, $phone, $address, $linkedin, $title, $summary,
            json_encode($experience), json_encode($education), $skills, 
            $style, $color, $notes, $filePath
        ]);
        
        echo "Thank you! Your resume request has been submitted. We'll contact you within 24 hours.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>