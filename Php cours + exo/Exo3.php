/* Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. 
Par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.*/

<?php
$x = (int)readline("Entrez un nombre ");
$i = 0;
while($i <= 10) {
  $numberend = $x+$i;
  echo "--$numberend";
  $i++;
}
?>
