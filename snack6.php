<?php
/* 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grey e 
i PM in un rettangolo green.
*/

$db = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'role' => "teacher"
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'role' => "teacher"
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'role' => "pm"
    ],
    [
        'name' => 'Federico',
        'lastname' => 'Pellegrini',
        'role' => "pm"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .grey,
        .green {
            padding: 40px;
            float: left;
            width: 50%;
            height: 200px;
        }

        .grey {
            background: grey;
        }

        .green {
            background: green;
        }
    </style>
</head>

<body>

    <div class="grey">
        <!-- teachers -->
        <?php
        foreach ($db as $user) {
            if ($user["role"] === 'teacher') {
                echo $user["name"] . " " . $user["lastname"];
            }
        }
        ?>
    </div>

    <div class="green">
        <?php if (true) { ?>

        <?php } ?>


        <!-- pm -->
        <?php
        foreach ($db as $user) {
            if ($user["role"] === 'pm') {
        ?>
                <div><?php echo $user["name"] . " " . $user["lastname"]; ?></div>
        <?php
            }
        }
        ?>
    </div>

</body>

</html>