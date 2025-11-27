<?php 
 $list_of_dress= [
    "cocktail dress",
    "evening gown",
    "Sheath Dress",
    "Tunic Dress"
 ];

$best = $list_of_dress[3];

switch ($best) {
    case "cocktail dress":
        $offer = "Get 20% off on 'Cocktail Dress' if you bought one more gown!";
        break;
    case "evening gown":
        $offer = "Buy one get one free on 'Eveing gown'!";
        break;
    case "Sheath Dress":
        $offer = "Free bookmark with every purchase of 'Sheath Dress'!";
        break;
    case "Tunic Dress":
        $offer = "Get a free pin with 'Tunic Dress'!";
        break;
    default:
        $offer = "No specials for today...";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Switch</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php include 'includes/header.php'; ?>
    <h1>Fashion Outlet</h1>

    <h2>Our Offers For Today's Best-Selling Dress:</h2>
    <p> <?= $offer ?> </p>

<?php include 'includes/footer.php'; ?>
</body>
</html>