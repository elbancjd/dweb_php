<?php
$makeup = [
    'brand' => 'Lumi',
    'product' => 'Velvet Lip Tint',
    'shade' => 'Rosewood',
    'price' => 350,
    'stock' => 5,
    'is_new' => true
];
$makeup['shade'] = 'Soft Peach';
$makeup['finish'] = 'Matte';

// if
$badge = '';
if ($makeup['is_new'] === true) {
    $badge = '[New Arrival]';
}

// if eles
if ($makeup['price'] < 500) {
    $promo = 'Eligible for Free Shipping!';
} else {
    $promo = 'Standard Shipping Applies';
}

// 3. if elseif else
if ($makeup['stock'] >= 10) {
    $message = 'Good availability';
} elseif ($makeup['stock'] > 0) {
    $message = 'Low stock';
} else {
    $message = 'Out of stock';
}

$shades = ['Soft Peach', 'Rosewood', 'Berry Blush', 'Nude Pink'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumi, lit by beauty</title>
    <link rel="stylesheet" href="img/css/style.css">
</head>
<body>
    <h1><?php echo $makeup['brand']; ?></h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="#featured">Featured</a>
        <a href="#shades">Shades</a>
        <a href="#about">About</a>
    </nav>

    <h2 id="featured">Featured Product <?php echo $badge; ?></h2>
    <img src="<?php echo $makeup['image']; ?>" alt="Makeup Placeholder">
    <p>Product: <?php echo $makeup['product']; ?></p>
    <p>Shade:   <?php echo $makeup['shade']; ?></p>
    <p>Finish:  <?php echo $makeup['finish']; ?></p>
    <p>Price:   ₱<?php echo $makeup['price']; ?> (<?php echo $promo; ?>)</p>
    <p>Status:  <?php echo $message; ?></p>

    <!-- for each -->
    <h3 id="shades">Available Shades</h3>
    <ul>
        <?php foreach ($shades as $shade) { ?>
            <li><?php echo $shade; ?></li>
        <?php } ?>
    </ul>

    <!-- for loop -->
    <h3>Bundle Deals</h3>
    <?php
    for ($packs = 1; $packs <= 3; $packs++) {
        echo '<p>' . $packs . ' Tint(s): ₱' . ($makeup['price'] * $packs) . '</p>';
    }
    ?>

    <!-- while loop -->
    <h3>Free Samples Left</h3>
    <?php
    $sample = 1;
    while ($sample <= 3) {
        echo '<p>Free Sample #' . $sample . ' included</p>';
        $sample++;
    }
    ?>

    <!-- do while -->
    <h3>Beauty Tip</h3>
    <?php
    $tip = 1;
    do {
        echo '<p>Tip #' . $tip . ': Dab lightly on lips and cheeks for a natural tint.</p>';
        $tip++;
    } while ($tip <= 1);
    ?>

    <h2 id="about">About</h2>
    <p>Simple everyday makeup essentials by <?php echo $makeup['brand']; ?>.</p>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php echo $makeup['brand']; ?> | elbancjd</p>
    </footer>
</body>
</html>