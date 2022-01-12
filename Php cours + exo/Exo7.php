/*Ecrire un algorithme qui demande successivement 20 nombres à l’utilisateur, 
et qui lui dise ensuite quel était le plus grand parmi ces 20 nombres : 
Entrez le nombre numéro 1 : 12 Entrez le nombre numéro 2 : 14 etc. 
Entrez le nombre numéro 20 : 6 Le plus grand de ces nombres est : 14 
Modifiez ensuite l’algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre : 
C’était le nombre numéro 2*/

<?php
$myArray = [];
$i = 0;
$position = 0;
while ($i < 5){
    $truc = (int)readline("Entrez un nombre " . $position . ":");
    array_push($myArray, $truc);
    $i++;
    $position++;
}

$max = max($myArray);
$hisPosition = array_search(max($myArray), $myArray);

echo "Le plus grand nombre est " . $max . "\r\n" . "Le numéro etait en position" . ($hisPosition + 1);
