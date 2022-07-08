<?php

$randomArray = [];

while (count($randomArray) < 100) {
    $randArr = rand(0, 100);
    if (!in_array($randArr, $randomArray)) $randomArray[] = $randArr;
}

?>