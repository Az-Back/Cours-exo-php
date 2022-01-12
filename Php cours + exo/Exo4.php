/* Réécrire l'algorithme précédent, en utilisant cette fois l'instruction Pour (Si ce n'est pas déjà le cas) */
<?php
$x = (int)readline("Entrez un nombre ");
$i = 0;
for($i = 0; $i <= 10;) {
  $numberend = $x+$i;
  echo "--$numberend";
  $i++;
}
?>
