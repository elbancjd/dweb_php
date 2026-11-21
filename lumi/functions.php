<?php
declare(strict_types = 1);

// 2. Multidimensional array storing products, prices, and stock levels (6 products for rule b)
$products = [
    'Velvet Lip Tint (Rosewood)' => ['price' => 350.00, 'stock' => 15],
    'Soft Peach Blush'           => ['price' => 280.00, 'stock' => 8],
    'Dewy Lip Gloss'             => ['price' => 220.00, 'stock' => 20],
    'Radiance Highlighter'       => ['price' => 450.00, 'stock' => 5],
    'Mineral Setting Powder'     => ['price' => 380.00, 'stock' => 12],
    'Hydrating Lip Oil'          => ['price' => 320.00, 'stock' => 6],
];

// 3. Global variable for tax rate (12% VAT in Php currency)
$tax_rate = 12;

// 4 & 5. get_reorder_message with ternary operator (< 10: Yes, otherwise No)
function get_reorder_message(int $stock): string
{
    return ($stock < 10) ? 'Yes' : 'No';
}

// 6 & 7. get_total_value returns price multiplied by available stock
function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

// 8 & 9. get_tax_due with default tax rate parameter (0%)
function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}

include 'includes/header.php';
?>

<h2>Stock Control</h2>

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
            <td><?= $product_name ?></td>
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
