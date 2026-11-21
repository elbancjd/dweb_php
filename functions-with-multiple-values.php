<?php
$us_price = 15;
$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
];

function calculate_prices($usd, $exchange_rates)
{
    $prices = [
        'pound' => $usd * $exchange_rates['uk'],
        'euro'  => $usd * $exchange_rates['eu'],
        'yen'   => $usd * $exchange_rates['jp'],
    ];
    return $prices;
}

$global_prices = calculate_prices($us_price, $rates);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Functions with Multiple Values</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>lumi</h1>
    <h2>Lumi Radiance Palette</h2>
    <p>US $<?= $us_price ?></p>
    <p>(UK &pound;<?= number_format($global_prices['pound'], 2) ?> | EU &euro;<?= number_format($global_prices['euro'], 2) ?> | JP &yen;<?= number_format($global_prices['yen'], 2) ?>)</p>
</body>
</html>
