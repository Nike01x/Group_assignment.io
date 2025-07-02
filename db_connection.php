<?php
$host = 'fdb1031.runhosting.com'; // or your host
$dbname = '4654758_canvakita';
$username = '4654758_canvakita'; // replace with your database username
$password = 'Naqiu1322'; // replace with your database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>