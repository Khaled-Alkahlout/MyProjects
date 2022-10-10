<?php
$naw = $naam = "Khaled " . $Straat = "Madelieventuin 10 " . $Woonplaats = "Zoetermeer";
echo "Gegevens: $naw";
$naam = "Khaled ";

echo <<<TEKST
<br>Salarisspecificatie van $naam: 2000 euro
<br>Maand: November
<br>Jaar: 2000
TEKST;

echo <<<tekst
<br>
tekst;

$num = 13.678;
printf (" %.4f", $num);
echo " - ";
$num = intval($num);
echo $num;
echo " - ";
$num = 13.678;
echo gettype($num);
$num = round($num);
echo $num;
$num = 13.678;
$num = doubleval($num);
echo " - ";
echo $num;
echo "-";
?>