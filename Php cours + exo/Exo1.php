/*Ecrire un algorithme qui demande à l’utilisateur un nombre compris entre 1 et 3 jusqu’à ce que la réponse convienne.*/

<?php 
$nombre = (int)readline('Entrez votre note : ');
if ($nombre > 0 && $nombre <= 3) {
    echo 'Reponse correcte';
} elseif ($nombre < 1 || $nombre > 3) {
    echo 'Reponse incorrect';
}