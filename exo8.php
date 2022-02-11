<?php

$nbr = 215218;

$parité = $nbr % 2;

if ($parité == 0) {
    echo "Le nombre " . $nbr . " est pair";
} else {
    echo "Le nombre " . $nbr . " n'est pas pair";
}

?>
