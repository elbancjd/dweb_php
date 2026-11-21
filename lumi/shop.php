<?php
declare(strict_types = 1);

// multidimensional array
$products = [
    'Velvet Lip Tint (Rosewood)' => ['price' => 350.00, 'stock' => 15],
    'Soft Peach Blush'           => ['price' => 280.00, 'stock' => 8],
    'Dewy Lip Gloss'             => ['price' => 220.00, 'stock' => 20],
    'Radiance Highlighter'       => ['price' => 450.00, 'stock' => 5],
    'Mineral Setting Powder'     => ['price' => 380.00, 'stock' => 12],
    'Hydrating Lip Oil'          => ['price' => 320.00, 'stock' => 6],
];

//global tax rate
$tax_rate = 12;


function get_reorder_message(int $stock): string
{
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}

include 'includes/header.php'; 
?>

<h2>Stock Control &amp; Shop Inventory</h2>
<p>Monitoring inventory, re-order thresholds, and valuations &mdash; lit by beauty.</p>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-Order</th>
        <th>Total Value</th>
        <th>Tax Due (<?= $tax_rate ?>%)</th>
    </tr>
    <?php foreach ($products as $product_name => $data) { ?>
        <tr>
            <td><strong><?= $product_name ?></strong></td>
            <td><?= $data['stock'] ?></td>
            <td><?= get_reorder_message($data['stock']) ?></td>
            <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
            <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2) ?></td>
        </tr>
    <?php } ?>
</table>

<?php 
include 'includes/footer.php'; 
?>
