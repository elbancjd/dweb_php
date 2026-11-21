<?php
$tax_rate = 0.2;

function calculate_running_total($price, $quantity)
{
    global $tax_rate;
    static $running_total = 0;
    $total = $price * $quantity;
    $tax = $total * $tax_rate;
    $running_total = $running_total + $total + $tax;
    return $running_total;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Global and Static Variables</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>lumi</h1>
    <h2>Running Order Total</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Running total</th>
        </tr>
        <tr>
            <td>Lip Tint:</td>
            <td>$12</td>
            <td>5</td>
            <td>$<?= calculate_running_total(12, 5); ?></td>
        </tr>
        <tr>
            <td>Velvet Blush:</td>
            <td>$15</td>
            <td>5</td>
            <td>$<?= calculate_running_total(15, 5); ?></td>
        </tr>
        <tr>
            <td>Glow Highlighter:</td>
            <td>$20</td>
            <td>4</td>
            <td>$<?= calculate_running_total(20, 4); ?></td>
        </tr>
    </table>
</body>
</html>
