<?php
$products = [
    ['name' => 'Velvet Lip Tint - Rosewood', 'price' => 15, 'tag' => 'Best Seller'],
    ['name' => 'Soft Peach Glow Blush', 'price' => 14, 'tag' => 'Popular'],
    ['name' => 'Hydrating Lip Oil', 'price' => 12, 'tag' => 'New'],
    ['name' => 'Radiance Highlighter', 'price' => 18, 'tag' => 'Trending']
];

include 'includes/header.php'; 
?>

<h2>lumi shop</h2>
<p>Explore our clean, radiant cosmetic essentials &mdash; lit by beauty.</p>

<table>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Badge</th>
    </tr>
    <?php foreach ($products as $p) { ?>
        <tr>
            <td><?= $p['name'] ?></td>
            <td>$<?= number_format($p['price'], 2) ?></td>
            <td><?= $p['tag'] ?></td>
        </tr>
    <?php } ?>
</table>

<?php 
include 'includes/footer.php'; 
?>
