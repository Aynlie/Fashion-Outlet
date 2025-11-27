<?php 
$dressList = [
    'cocktail dress' => 20.00,
    'evening gown' => 40.00,
    'sheath Dress' => 30.00,
    'Tunic Dress' => 50.00,

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <h1>Fashion Outlet</h1>

    <h2>Price List</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($dressList as $dress => $price) { ?>
            <tr>
                <td><?= $dress ?></td>
                <td>$<?= $price ?></td>
            </tr>
        <?php } ?>
    </table>

<?php include 'includes/footer.php'; ?>
</body>
</html>