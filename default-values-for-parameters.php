<?php
function calculate_cost($cost, $quantity, $discount = 0)
{
    $cost = $cost * $quantity;
    return $cost - $discount;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Default Values for Parameters</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>lumi</h1>
    <h2>Lip Tints &amp; Finishes</h2>
    <p>Rosewood Velvet Tint $<?= calculate_cost(15, 3, 5) ?></p>
    <p>Soft Peach Lip Gloss $<?= calculate_cost(12, 2) ?></p>
    <p>Berry Blush Matte Tint $<?= calculate_cost(18, 4, 10) ?></p>
</body>
</html>
