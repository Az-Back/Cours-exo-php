/* Lire la suite des prix en euros entiers et terminée par zéro des achats d’un client. 
Calculer la somme qu’il doit, lire la somme qu’il paye, 
et simuler la remise de la monnaie en affichant les textes 
"10 Euros", "5 Euros" et "1 Euro" autant de fois qu’il y a de coupures de chaque sorte à rendre.
*/
<?php
$tab9 = [];

do
{
	$nbr9 = readLine('Saisissez un nombre : ');
	array_push($tab9, $nbr9);
}
while($nbr9 != 0);

$total = array_sum($tab9);

echo 'Le client doit '.$total.' euros.; ';

$paye = readLine('Indiquez la somme versée : ');

$diff = $paye - $total;

if($diff < 0)
{
	echo 'Le client nous doit encore '.$diff.'.';
}
else
{
	echo 'Nous devons rendre au client '.$diff.'; ';


	$reste = $diff - ($diff % 10);
	$calc = $reste / 10;
	echo 'Nous lui rendons '.$calc.' billets de 10; ';

		
	$reste2 = $diff - ($calc * 10);
	$calc2 = intdiv($reste2,5);
	echo 'Nous lui rendons '.$calc2.' billets de 5; ';

	$calc3 = ($reste2) - ($calc2 * 5);
	echo 'Nous lui rendons '.$calc3.' pièces de 1; ';

}

