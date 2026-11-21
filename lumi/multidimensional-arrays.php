<?php
$offers = [
    ['name' => 'Velvet Lip Tint', 'price' => 15, 'stock' => 120,],
    ['name' => 'Soft Peach Blush', 'price' => 14, 'stock' => 66,],
    ['name' => 'Lumi Glow Highlighter', 'price' => 18, 'stock' => 97,],
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Multidimensional Arrays</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>lumi</h1>
        <h2>Offers</h2>
        <p><?php echo $offers[0]['name']; ?> - 
            $<?php echo $offers[0]['price']; ?> </p>
        <p><?php echo $offers[1]['name']; ?> - 
            $<?php echo $offers[1]['price']; ?> </p>
        <p><?php echo $offers[2]['name']; ?> - 
            $<?php echo $offers[2]['price']; ?> </p>
    </body>
</html>
