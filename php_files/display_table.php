<?php
require_once 'dbconfig.php';

$sql = "SELECT * FROM grocery_items";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items Table</title>
    <style>
        table { border-collapse: collapse; width: 70%; margin: 20px auto; }
        th, td { border: 1px solid #555; padding: 8px; text-align: center; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Grocery Items</h2>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Category</th>
            <th>Price</th><th>Stock</th><th>Date Added</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $item['item_id'] ?></td>
                <td><?= $item['item_name'] ?></td>
                <td><?= $item['category'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td><?= $item['date_added'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
