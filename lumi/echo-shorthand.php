<?php
$name = 'elbancjd';
$favorites = ['Rosewood Lip Tint', 'Soft Peach Blush', 'Glow Highlighter',];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Echo Shorthand</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>lumi</h1>
        <h2>Welcome <?= $name ?></h2>
        <p>Your favorite cosmetic shade is:
            <?= $favorites[0] ?>.</p>
    </body>
</html>
