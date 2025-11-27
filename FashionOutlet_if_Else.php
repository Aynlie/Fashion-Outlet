<?php 
 $name = "Jaymee";
 $list_of_dress = [
    "cocktail dress",
    "evening gown",
    "Sheath Dress",
    "Tunic Dress"
 ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional If</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php include 'includes/header.php'; ?>
    <h1>The list of Dresses</h1>

    <?php 
        if ($name == "Jaymee") {
            echo "<h2>It Fashion Night!</h2>";
        } else {
            echo "<h2>Welcome to our Fashion Outlet!</h2>";
        }
    ?>

    <h2>Our Popular Dresses Of The Month Are:</h2>
    <p><?= $list_of_dress[0] ?> </p>
    <p><?= $list_of_dress[1] ?> </p>
    <p><?= $list_of_dress[2] ?> </p>
    <p><?= $list_of_dress[3] ?> </p>

<?php include 'includes/footer.php'; ?>
</body>
</html>