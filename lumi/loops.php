<?php

$price = 12.99;

$products = [
    'Velvet Lip Tint' => 12.99,
    'Soft Peach Blush' => 14.50,
    'Lumi Glow Highlighter' => 18.00,
];

$best_sellers = ['Velvet Lip Tint', 'Soft Peach Blush', 'Lumi Glow Highlighter'];
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>lumi</h1>

    <!-- while loop -->
    <h2>1. Prices for Multiple Items (While Loop)</h2>
    <p>
        <?php
        $counter = 1;
        $packs = 5;
        while ($counter <= $packs) {
            echo $counter;
            echo ' items cost $';
            echo number_format($price * $counter, 2);
            echo '<br>';
            $counter++;
        }
        ?>
    </p>

    <!-- do while loop -->
    <h2>2. Prices for Multiple Items (Do...While Loop)</h2>
    <p>
        <?php
        $packs_do = 5;
        do {
            echo $packs_do;
            echo ' items cost $';
            echo number_format($price * $packs_do, 2);
            echo '<br>';
            $packs_do--;
        } while ($packs_do > 0);
        ?>
    </p>

    <!-- for loop -->
    <h2>3. Prices for Multiple Items (1 to 10)</h2>
    <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
            echo ' items cost $';
            echo number_format($price * $i, 2);
            echo '<br>';
        }
        ?>
    </p>

    <h2>4. Prices for Large Orders (10 to 100)</h2>
    <p>
        <?php
        for ($i = 10; $i <= 100; $i = $i + 10) {
            echo $i;
            echo ' items cost $';
            echo number_format($price * $i, 2);
            echo '<br>';
        }
        ?>
    </p>

    <!-- foreach loop  -->
    <h2>5. Price List (Foreach Loop - Key &amp; Value)</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $item_price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td>$<?= number_format($item_price, 2) ?></td>
            </tr>
        <?php } ?>
    </table>

    <!-- foreach loop values -->
    <h2>6. Best Sellers (Values Only)</h2>
    <?php foreach ($best_sellers as $product) { ?>
        <p><?= $product ?></p>
    <?php } ?>

</body>
</html>
