<?php

$randomArray = [];

while (count($randomArray) < 15) {
    $randArr = rand(0, 100);
    if (!in_array($randArr, $randomArray)) $randomArray[] = $randArr;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random 15</title>
</head>
<body>
    <h1>Array of random numbers (0 - 100):</h1>
    <h2><?php for($i=0; $i<count($randomArray); $i++) echo "$randomArray[$i] | " ?></h2>
</body>
</html>