<?php
require_once 'dbconfig.php';

// New item data
$item_name = 'Bananas';
$category = 'Fruits';
$price = 20.00;
$stock = 25;

// Insert query with named placeholders
$sql = "INSERT INTO grocery_items (item_name, category, price, stock)
        VALUES (:item_name, :category, :price, :stock)";

$stmt = $pdo->prepare($sql);

// Bind parameters and execute
$stmt->execute([
    'item_name' => $item_name,
    'category' => $category,
    'price' => $price,
    'stock' => $stock
]);

echo "Record inserted successfully!";
?>
