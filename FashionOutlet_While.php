<?php 
$counter = 2;
$limit = 6;
$price = 20.00;

// Optional: a helper to format money
function money($amount) {
    return number_format((float)$amount, 2, '.', '');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop While</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <h1>Fashion Outlet</h1>

    <h2>Dress Prices</h2>
    <p>(for every purchase after the first, get a discount that stacks up to 5 times)</p>
    <p>
        <?php
        $maxDiscounts = 5; // maximum number of stacking discounts
        while ($counter <= $limit) {
            $quantity = $counter;
            $total = $price * $quantity;

            // discounts stack: 2% per additional item, up to 5 times
            $discountsUsed = max(0, min($quantity - 1, $maxDiscounts));
            $discountRate = 0.02 * $discountsUsed; // 2% per discount
            $totalAfterDiscount = $total * (1 - $discountRate);

            echo $quantity . " books cost $" . money($totalAfterDiscount) . "<br>";

            $counter++;
        }
        ?>
    </p>

    <?php include 'includes/footer.php'; ?>
</body>
</html>