<?php
require_once 'dbconfig.php';

$id = 2; // Example: delete item with ID 2

$sql = "DELETE FROM grocery_items WHERE item_id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

echo "Record with ID $id deleted successfully!";
?>
