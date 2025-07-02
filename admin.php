<?php
// admin.php - UNSECURED VERSION (for academic use only)
require_once 'db_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>CanvaKita - Admin Panel</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 30px; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
        h1 { color: #815854; }
        .container { max-width: 1200px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 CanvaKita Submissions</h1>
        
        <h2>📩 Contact Messages</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
            <?php
            $contacts = $conn->query("SELECT * FROM contact_submissions ORDER BY submission_date DESC");
            while ($row = $contacts->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['subject']}</td>
                    <td>{$row['message']}</td>
                    <td>{$row['submission_date']}</td>
                </tr>";
            }
            ?>
        </table>

        <h2>🛍️ Custom Orders</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Template Type</th>
                <th>Requirements</th>
                <th>Date</th>
            </tr>
            <?php
            $orders = $conn->query("SELECT * FROM custom_orders ORDER BY submission_date DESC");
            while ($row = $orders->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['template_type']}</td>
                    <td>{$row['requirements']}</td>
                    <td>{$row['submission_date']}</td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>