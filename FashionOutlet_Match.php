<?php 
$list_of_dress = [
    "Cocktail Dress",
    "Evening Gown",
    "Sheath Dress",
    "Tunic Dress"
];

$dressList = [
    "Cocktail Dress" => 20.00,
    "Evening Gown" => 40.00,
    "Sheath Dress" => 30.00,
    "Tunic Dress" => 50.00,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping/Conditional with Match</title>
    <link rel="stylesheet" href="css/styles.css">

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #ffe6ef;
            color: #4b2c2c;
            text-align: center;
        }

        h1 {
            color: #d86ca3;
        }

        h2 {
            color: #b24476;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            font-size: 1.1em;
            padding: 10px;
        }

        .Casual { color: #ff69b4; }      
        .Formal { color: #800080; }     
        .Date_Night { color: #ffb6c1; } 
        .Simple { color: #ff69b4; }    
        .None { color: indigo; }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    
    <h1>Fashion Outlet</h1>
    <h2>Our Offers For Today's Best-Selling Dresses:</h2>

    <ul>
        <?php foreach ($list_of_dress as $dress): ?>
            <li class="<?php
                echo match($dress) {
                    "Cocktail Dress" => "Casual",
                    "Evening Gown" => "Formal",
                    "Sheath Dress" => "Date_Night",
                    "Tunic Dress" => "Simple",
                    default => "None"
                };
            ?>">
                <?php
                    echo match($dress) {
                        "Cocktail Dress" => "Get 20% off on 'Cocktail Dress' priced at $" . $dressList["Cocktail Dress"] . " if you buy one more!",
                        "Evening Gown" => "Buy one get one free on 'Evening Gown' priced at $" . $dressList["Evening Gown"] . "!",
                        "Sheath Dress" => "Free accessory with every purchase of 'Sheath Dress' priced at $" . $dressList["Sheath Dress"] . "!",
                        "Tunic Dress" => "Get a free pin with 'Tunic Dress' priced at $" . $dressList["Tunic Dress"] . "!",
                        default => "No specials for today..."
                    };
                ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
