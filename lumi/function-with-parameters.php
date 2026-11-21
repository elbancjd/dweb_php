<?php
function calculate_total($price, $quantity)
{
    $cost = $price * $quantity;
    $tax = $cost * (20 / 100);
    $total = $cost + $tax;
    return $total;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Function with Parameters</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>lumi</h1>
    <h2>Order Totals</h2>
    <p>Lip Tint: $<?= calculate_total(12, 5) ?></p>
    <p>Velvet Blush: $<?= calculate_total(15, 5) ?></p>
    <p>Glow Highlighter: $<?= calculate_total(20, 4) ?></p>
</body>
</html>
