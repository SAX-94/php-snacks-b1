<?php

$matches = [
    [
        "homeTeam" => "Olimpia Milano",
        "guestTeam" => "Pallacanestro Cantù",
        "homeScore" => 55,
        "guestScore" => 60
    ],
    [
        "homeTeam" => "Orlando Magics",
        "guestTeam" => "Boston Celtics",
        "homeScore" => 90,
        "guestScore" => 80
    ],
    [
        "homeTeam" => "Pallacanestro Reggiana",
        "guestTeam" => "Polisportiva Dinamo",
        "homeScore" => 40,
        "guestScore" => 70
    ],
    [
        "homeTeam" => "Pallacanestro Brescia",
        "guestTeam" => "New Basket Brindisi",
        "homeScore" => 70,
        "guestScore" => 60
    ],
    [
        "homeTeam" => "Chicago Bulls",
        "guestTeam" => "Charlotte Hornets",
        "homeScore" => 120,
        "guestScore" => 78
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball matches</title>
</head>

<body>
    <h1>Basketball matches</h1>
    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) : ?>
            <li><?php echo $matches[$i]['homeTeam'] . " - " . $matches[$i]['guestTeam'] . " |<strong> " . $matches[$i]['homeScore'] . " - " . $matches[$i]['guestScore'] ?></strong></li>
        <?php endfor; ?>
    </ul>
</body>

</html>