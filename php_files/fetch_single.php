<?php
require_once 'dbconfig.php';

$sql = "SELECT * FROM grocery_items WHERE item_id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => 1]);

$item = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($item);
echo "</pre>";
?>
