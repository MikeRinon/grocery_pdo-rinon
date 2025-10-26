<?php
// dbconfig.php
// This file sets up a PDO connection to the grocery_store database

$host = 'localhost';
$dbname = 'grocery_db';
$username = 'root';
$password = '';

try {
    // Create a PDO instance with error mode set to exception
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
