<?php
function write_logo()
{
    echo '<img src="img/logo.png" alt="lumi symbol" class="brand-logo" />';
}

function write_copyright_notice()
{
    $year = date('Y');
    echo '&copy; ' . $year . ' lumi &bull; lumi, lit by beauty | elbancjd';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Basic Functions</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1><?php write_logo(); ?>lumi</h1>
        <p class="tagline">lumi, lit by beauty</p>
    </header>
    <article>
        <h2>Welcome to lumi</h2>
        <p>Lit by beauty. Experience clean, radiant cosmetics crafted with skin-loving formulas.</p>
    </article>
    <footer>
        <?php write_logo(); ?>
        <?php write_copyright_notice(); ?>
    </footer>
</body>
</html>
