<?php
$tab7 = [];

for($i = 0 ; $i < 20 ; $i++)
{
    $nombre7 = readLine('Saisissez un nombre : ');
    array_push($tab7, $nombre7);
}
$key = array_search(max($tab7), $tab7);
echo 'La valeur max est '.max($tab7).' qui correspond au '.($key+1).'ème nombre; ';