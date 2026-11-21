<?php
$tax = '20';

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
    <title>Global and Local Scope</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>lumi</h1>
    <h2>Cosmetic Pricing (Tax Inclusive)</h2>
    <p>Lip Tint: $<?= calculate_total(12, 5) ?></p>
    <p>Velvet Blush: $<?= calculate_total(15, 5) ?></p>
    <p>Glow Highlighter: $<?= calculate_total(20, 4) ?></p>
    <p>Prices include tax at: <?= $tax ?>%</p>
</body>
</html>
