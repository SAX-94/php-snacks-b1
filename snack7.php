<?php

$classe = [
    [
        "nome" => "Elvira",
        "cognome" => "Porcellato",
        "voti" => [6, 7, 8, 4, 7]
    ],
    [
        "nome" => "Valeria",
        "cognome" => "Zamengo",
        "voti" => [3, 9, 5, 5, 7]
    ],
    [
        "nome" => "Chiara",
        "cognome" => "Vecoli",
        "voti" => [2, 5, 7, 6, 8]
    ],
    [
        "nome" => "Ermenegildo",
        "cognome" => "Filippelli",
        "voti" => [9, 8, 7, 10, 8]
    ],
    [
        "nome" => "Saverio",
        "cognome" => "Franscini",
        "voti" => [2, 4, 3, 6, 5]
    ],
    [
        "nome" => "Germana",
        "cognome" => "Vivaldi",
        "voti" => [8, 7, 6, 7, 5]
    ],
    [
        "nome" => "Federico",
        "cognome" => "Donini",
        "voti" => [8, 6, 6, 4, 7]
    ],
    [
        "nome" => "Leopoldo",
        "cognome" => "Tacchini",
        "voti" => [9, 9, 8, 7, 8]
    ],
];

for ($i = 0; $i < count($classe); $i++) {
    $studente = $classe[$i];

    // sommando tutti i numeri presenti nell'array diviso la lunghezza dell'array = media voti
    $voti = array_values($studente["voti"]);

    // var_dump($studente["voti"], $voti);
    $mediaVoti = round(array_sum($voti) / count($voti), 1);

    echo $studente["nome"] . " " . $studente["cognome"] . " - <strong>" . $mediaVoti . "</strong><br>";
}
