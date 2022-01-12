<?php
/* On veut demander a l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande a l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
+ On affiche le/les créneau/x d'ouverture
*/

// On demande a l'utilisateur de rentrer un créneaux
  // On demande l'heure de début
  // On demande l'heure de fin
  // On verifire que l'heure de fin > l'heure du debut
  // On demande si on veut rajouter un nouveaux creneaux (o/n)
 
// On demande a l'utilisateur de rentrer une heure
// On affiche l'état d'ouverture du magasin 

$creneaux = [];

while (true) {
    $debut = (int)readline("Heure de début du créneau: ");
    $fin = (int)readline("Heure de fin de créneau: ");
    if ($debut >= $fin){
        echo "Le créneaux ne peut pas être enregistré car l'heure de debut ($debut) est supérieur a l'heure de fin ($fin)";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Entrez un nouveau créneau ? ");
        if($action === 'n'){
            break;
        }
    }
}

// Le magasin est ouvert de 14h a 18h et de 8h a 14h

echo 'Le magasin est ouvert de ';
foreach($creneaux as $k => $creneau){
    if($k > 0) {
        echo ' et de ';
    }
    echo $creneau[0] . 'h à '. $creneau[1] . 'h';
}

// $heure = (int)readline("A quel heure voulez-vous visiter le magasin?: ");
// $creneauTrouvé = false;

// foreach($creneaux as $creneau){
//     if($heure >= $creneau[0] && $heure <= $creneau[1]){
//         $creneauTrouvé = true;
//         break;
//     }
// }

// if ($creneauTrouvé){
//     echo 'Le magasin est ouvert';
// } else {
//     echo 'Desoler le magasin est fermer';
// }