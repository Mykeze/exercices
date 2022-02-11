<?php

$entier=10;
$pair=0;

for ($i = 1; $i <= $entier; $i++) {

    if(EstPair($i)==true){
        
        $pair=$pair+$i;
      
    }
    else{
        $pair=$pair+0;
    }

}

echo "la somme des premiers entiers pair de ".$entier." est ".$pair;


function EstPair($nombre)
{

    $parité = $nombre % 2;

    if ($parité == 0) {
        return true;
    } else {
        return false;
    }
}


?>
