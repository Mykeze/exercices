<?php

$a=60;

$resultat="";

$x=0;
$y=0;


    $x = round(cos(deg2rad($a)),2);
    $y = round(sin(deg2rad($a)),2);

    $resultat = "Les coordonées de P sont : (" . $x .", " . $y . ")<br>";
    echo $resultat ;
?>
