<?php
$name = 'Ivy';
$greeting = 'Hello';

if ($name !== '') {
    $greeting = 'Welcome back, ' . $name;
}

$stock = 5;
$ordered = 3;

if ($stock > 0) {
    $message = 'In stock';
} elseif ($ordered > 0) {
    $message = 'Coming soon';
} else {
    $message = 'Sold out';
}

$day = 'Monday';
$offer = match($day) {
    'Monday' => '30% off Velvet Lip Tint',
    'Saturday', 'Sunday' => '20% off all lipsticks and blushes',
    default => '10% off your entire beauty order',
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>Conditional Statements</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>lumi</h1>
    
    <h2><?= $greeting ?></h2>

    <h2>Rosewood Lip Tint</h2>
    <p><?= $message ?></p>

    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
</body>
</html>
