<?php
$stock = 25;

if ($stock >= 10) {
    $message = 'Good availability';
}
if ($stock > 0 && $stock < 10) {
    $message = 'Low stock';
}
if ($stock == 0) {
    $message = 'Out of stock';
}

include 'includes/header.php'; 
?>

<h2>Rosewood Velvet Lip Tint</h2>
<p><?php echo $message; ?></p>

<?php 
include 'includes/footer.php'; 
?>
