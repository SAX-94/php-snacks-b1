<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

function verifyAccess($name, $email, $age)
{
    if (
        strlen($name) >= 3 &&
        strpos($email, '.') !== false &&
        strpos($email, '@') !== false &&
        !empty($age) &&
        is_numeric($age)
    ) return "Accesso riuscito!";
    else return "Accesso negato!";
}

var_dump($name);
var_dump($email);
var_dump($age);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso</title>
</head>

<body>
    <h1><?php echo verifyAccess($name, $email, $age); ?></h1>
</body>

</html>