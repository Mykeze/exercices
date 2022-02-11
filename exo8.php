<?php

$nbr = 215218;

$parité = $nbr % 2;

if ($parité == 0) {
    echo "Le nombre " . $nbr . " est pair";
} else {
    echo "Le nombre " . $nbr . " n'est pas pair";
}

?>

<?php

/* $nbr = 215218;

echo EstPair($nbr);

function EstPair($nombre)
{

    $parité = $nombre % 2;

    if ($parité == 0) {
        return "Le nombre " . $nombre . " est pair";
    } else {
        return "Le nombre " . $nombre . " n'est pas pair";
    }
}

 */
?>
