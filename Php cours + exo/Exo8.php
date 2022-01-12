<?php
$myArray = [];
$truc = (int)readline("Entrez un nombre ");
while ($truc != 0 ){
    $truc = (int)readline("Entrez un nombre ");
    array_push($myArray, $truc);
}

echo max($myArray);