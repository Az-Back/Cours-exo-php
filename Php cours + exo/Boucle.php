<?php
/* Demande a l'utilisateur de rentrer une note ou de taper "fin"
chaque note est sauvegardée dans un tableau $notes (pensez $notes[])
a la fin on affiche le tableau de note sous forme de liste
*/

$notes = [];
$action = null;

// TANT QUE l'utilisateur ne tape pas "fin"
while($action !== "fin"){
   $action = readline("Entre une nouvelle note (ou \'fin\' pour terminer la saisie) : ");
   // On ajoute la note tapée au tableau notes
   if($action !== "fin"){
       $notes[] = (int)$action;
   }
}
// POUR CHAQUE note DANS notes
foreach($notes as $note){
    // ON AFFICHE "- note"
    echo "- $note \n";
}





// $notes = [10, 15, 16];
// $eleves = [
//     'cm2' => ["Jean" , "Marc", "Jane", "Marion"],
//     'cm1' => ['Emilie', 'Marcelin']
// ];


// foreach ($eleves as $classe => $listEleves) {
//     echo "La classe $classe \n";
//     foreach ($listEleves as $eleve){
//         echo "- $eleve \n";
//     }
//     echo "\n";
// }

// for ($i = 0; $i < 3; $i++){
//     echo '- '. $notes[$i] . "\n";
// }

// $chiffre = null;

// while ($chiffre !== 10) {
//     $chiffre = (int)readline('Entrez un chiffre: ');
// };

// echo 'Bravo vous avez gagné!';