<?php
$price = 14;
$quantity = 3;

function calculate_total(int $price, int $quantity): int
{
    return $price * $quantity;
}

$total = calculate_total($price, $quantity);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Type Declarations</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>lumi</h1>
    <h2>Mineral Blush</h2>
    <p>Total $<?= $total ?></p>
</body>
</html>
