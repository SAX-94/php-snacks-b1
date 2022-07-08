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