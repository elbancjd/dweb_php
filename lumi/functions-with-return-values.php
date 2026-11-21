<?php
function create_logo()
{
    return '<img src="img/logo.png" alt="lumi symbol" class="brand-logo" />';
}

function create_copyright_notice()
{
    $year = date('Y');
    $message = '&copy; ' . $year . ' lumi &bull; lumi, lit by beauty | elbancjd';
    return $message;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Functions with Return Values</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1><?= create_logo() ?>lumi</h1>
        <p class="tagline">lumi, lit by beauty</p>
    </header>
    <article>
        <h2>Welcome to lumi</h2>
        <p>Lit by beauty. Experience clean, radiant cosmetics crafted with skin-loving formulas.</p>
    </article>
    <footer>
        <?= create_logo() ?>
        <?= create_copyright_notice() ?>
    </footer>
</body>
</html>
