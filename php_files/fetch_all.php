<?php
require_once 'dbconfig.php';

// Prepare and execute query
$sql = "SELECT * FROM grocery_items";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch all rows
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($rows); // print array in readable format
echo "</pre>";
?>
