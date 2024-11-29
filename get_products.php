<?php
include 'db.php';

// Fetch products from database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Output products as JSON
header('Content-Type: application/json');
echo json_encode($products);
