/* Ecrire un algorithme qui demande un nombre compris entre 10 et 20, 
jusqu’à ce que la réponse convienne. En cas de réponse supérieure à 20, on fera apparaître un message : 
« Plus petit ! », et inversement, « Plus grand ! » si le nombre est inférieur à 10.*/

<?php 
$nombre = (int)readline('Entrez votre note : ');
if ($nombre > 10 && $nombre <= 20) {
    echo 'Reponse correcte';
} elseif ($nombre > 20) {
    echo 'Plus petit';
} elseif ($nombre < 10){
    echo 'Plus grand!';
};