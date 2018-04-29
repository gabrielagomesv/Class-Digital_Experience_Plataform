<?php
function calculaKm(){
    $km = 1.60934;
    $percorridoEmMilhas = 124;
    $distanciaEmKm = 0;

    $distanciaEmKm = $percorridoEmMilhas * $km;

    echo "Eles percorreram " . $distanciaEmKm. " quilômetros.";
}

calculaKm();
?>