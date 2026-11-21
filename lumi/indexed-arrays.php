<?php
$best_sellers = ['Velvet Lip Tint', 'Soft Peach Blush', 'Glow Highlighter',
    'Matte Lipstick', 'Hydrating Lip Oil', ];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Indexed Arrays</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>lumi</h1>
        <h2>Best Sellers</h2>
        <ul>
            <li><?php echo $best_sellers[0]; ?></li>
            <li><?php echo $best_sellers[1]; ?></li>
            <li><?php echo $best_sellers[2]; ?></li>
        </ul>
    </body>
</html>
