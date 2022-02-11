<?php

$fact=3;
$a=0;
$b=1;

for ($i = 1; $i <= $fact; $i++) {

    $a = $a+1;
    $b = $b*$a;

}
echo "Factorielle de ". $fact ." est ". $b . "<br>";
?>