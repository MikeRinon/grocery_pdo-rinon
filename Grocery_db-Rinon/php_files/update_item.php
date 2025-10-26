<?php
require_once 'dbconfig.php';

$id = 3;
$new_price = 38.00;
$new_stock = 45;

$sql = "UPDATE grocery_items
        SET price = :price, stock = :stock
        WHERE item_id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'price' => $new_price,
    'stock' => $new_stock,
    'id' => $id
]);

echo "Record with ID $id updated successfully!";
?>
