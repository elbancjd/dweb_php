<?php
    // lumi Store
    $items = '5';       // String
    $cost = 15;         // Integer

    // PHP automatically converts the string into a number
    $total = $items * $cost;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Type Juggling</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <h1>Welcome to lumi!</h1>
    <h2>Beauty Order Summary</h2>

    <p>Number of Lip Tints: <?= $items ?></p>
    <p>Cost per Tint: $<?= $cost ?></p>
    <p>Total Cost: $<?= $total ?></p>

</body>
</html>
