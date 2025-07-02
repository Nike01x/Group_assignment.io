<?php
// get_resume_details.php
require_once 'db_connection.php';

if (isset($_GET['id'])) {
    $orderId = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM resume_orders WHERE id = ?");
    $stmt->execute([$orderId]);
    $order = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($order) {
        $experience = json_decode($order['experience'], true);
        $education = json_decode($order['education'], true);
        
        echo "<h2>Resume Order #{$order['id']}</h2>";
        echo "<p><strong>Submitted on:</strong> {$order['submission_date']}</p>";
        
        echo "<h3>Personal Information</h3>";
        echo "<p><strong>Name:</strong> {$order['name']}</p>";
        echo "<p><strong>Email:</strong> {$order['email']}</p>";
        echo "<p><strong>Phone:</strong> {$order['phone']}</p>";
        echo "<p><strong>Address:</strong> {$order['address']}</p>";
        echo "<p><strong>LinkedIn:</strong> {$order['linkedin']}</p>";
        
        echo "<h3>Professional Information</h3>";
        echo "<p><strong>Title:</strong> {$order['professional_title']}</p>";
        echo "<p><strong>Summary:</strong> {$order['summary']}</p>";
        
        echo "<h3>Work Experience</h3>";
        if (!empty($experience)) {
            echo "<ul>";
            foreach ($experience as $exp) {
                echo "<li>";
                echo "<strong>{$exp['title']}</strong> at {$exp['company']} ({$exp['dates']})<br>";
                echo nl2br($exp['description']);
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No experience provided</p>";
        }
        
        echo "<h3>Education</h3>";
        if (!empty($education)) {
            echo "<ul>";
            foreach ($education as $edu) {
                echo "<li>";
                echo "<strong>{$edu['degree']}</strong> from {$edu['institution']} ({$edu['dates']})<br>";
                if (!empty($edu['details'])) {
                    echo nl2br($edu['details']);
                }
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No education provided</p>";
        }
        
        echo "<h3>Skills</h3>";
        echo "<p>{$order['skills']}</p>";
        
        echo "<h3>Design Preferences</h3>";
        echo "<p><strong>Style:</strong> {$order['style']}</p>";
        echo "<p><strong>Color:</strong> {$order['color']}</p>";
        
        echo "<h3>Additional Notes</h3>";
        echo "<p>" . (!empty($order['notes']) ? nl2br($order['notes']) : 'No additional notes') . "</p>";
        
        if (!empty($order['file_path'])) {
            echo "<h3>Uploaded File</h3>";
            echo "<p><a href='{$order['file_path']}' target='_blank'>Download Reference File</a></p>";
        }
    } else {
        echo "<p>Order not found</p>";
    }
} else {
    echo "<p>Invalid request</p>";
}
?>