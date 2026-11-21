<?php
$shades_data = [
    ['name' => 'Soft Peach', 'finish' => 'Velvet Matte', 'tone' => 'Warm Peach', 'hex' => '#e89a88', 'status' => 'In Stock'],
    ['name' => 'Rosewood', 'finish' => 'Soft Matte', 'tone' => 'Muted Rose', 'hex' => '#a65463', 'status' => 'Low Stock'],
    ['name' => 'Berry Blush', 'finish' => 'Hydrating Tint', 'tone' => 'Deep Berry', 'hex' => '#873347', 'status' => 'In Stock'],
    ['name' => 'Nude Pink', 'finish' => 'Dewy Satin', 'tone' => 'Neutral Nude', 'hex' => '#d4969b', 'status' => 'In Stock']
];

include 'includes/header.php';
?>

<h2>Available Shades</h2>
<p>Find your signature shade in our skincare-infused Velvet Lip Tint collection &mdash; lit by beauty.</p>

<table>
    <tr>
        <th>Swatch</th>
        <th>Shade Name</th>
        <th>Tone</th>
        <th>Finish</th>
        <th>Status</th>
    </tr>
    <?php foreach ($shades_data as $s) { ?>
        <tr>
            <td><span style="display:inline-block; width:22px; height:22px; border-radius:50%; background-color: <?= $s['hex'] ?>; border:1px solid #c97e8e; vertical-align:middle;"></span></td>
            <td><strong><?= $s['name'] ?></strong></td>
            <td><?= $s['tone'] ?></td>
            <td><?= $s['finish'] ?></td>
            <td><?= $s['status'] ?></td>
        </tr>
    <?php } ?>
</table>

<?php
include 'includes/footer.php';
?>
