<?php
$prefix = 'Thank you for choosing lumi';
$name = 'christine';
$message = $prefix . ', ' . $name;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>String Operators</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>lumi</h1>
        <h2><?= $name ?>'s Order</h2>
        <p><?= $message ?></p>
    </body>
</html>
