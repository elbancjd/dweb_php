<?php
$formula = [
    'hydration' => 45,
    'pigment'   => 38,
    'spf'       => 15,
];
$formula['hydration'] = 50;
$formula['vitamin_e'] = 5;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Updating Arrays</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>lumi</h1>
        <h2>Formula Composition (per 100g)</h2>
        <p>Hydration: <?php echo $formula['hydration']; ?>%</p>
        <p>Pigment: <?php echo $formula['pigment']; ?>%</p>
        <p>SPF Protection: <?php echo $formula['spf']; ?>%</p>
        <p>Vitamin E: <?php echo $formula['vitamin_e']; ?>%</p>
    </body>
</html>
