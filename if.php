<?php
    echo "<br>---- Opgave 24";
    echo "<br>";
    echo "<br>";
    $gewerkteuren = 40;
    $uurtarief = 15.00;
    $bonus = 100.00;
    $bruto = $gewerkteuren * $uurtarief;
    if($gewerkteuren <= 40)
    {
        echo "Uw basissalaris is: €".$bruto;
        echo "<br>";
        echo "Uw belasting is: €". 0.40 * $bruto;
    }


    echo "<br>";
    echo "<br>---- Opgave 25";
    echo "<br>";
    echo "<br>";
    echo "Uw basissalaris is: €".$bruto;
    echo "<br>";
    echo "Uw belasting is: €". 0.40 * $bruto;
    echo "<br>";
    echo "Uw nettobedrag is: " .$bruto - 0.40 * $bruto;
    echo "<br>";
    $uur = 10;
    if($uur <= 11)
    { 
        echo "Goedemorgen";
    }
    elseif($uur >= 12 && $uur = 18)
    {
        echo "Goedemiddag";
    }
    else
    {
        echo "Goedeavond";
    }


    echo "<br>";
    echo "<br>---- Opgave 26";
    echo "<br>";
    echo "<br>";
    $bruto = 675;
    $gewerkteuren = 45;
    if($gewerkteuren > 40);
    {
        echo "Uw basissalaris is: €".$bruto;
        echo "<br>";
        echo "Uw basissalaris plus bonus is: ".$bruto + $bonus;
        echo "<br>";
        echo "Uw belasting is: €". 0.45 * ($bruto + $bonus);
    }


    echo "<br>";
    echo "<br>---- Opgave 27";
    echo "<br>";
    echo "<br>";
    $bruto = 675;
    $gewerkteuren = 45;
    if($gewerkteuren > 40);
    {
            echo "Uw basissalaris is: €".$bruto;
            echo "<br>";
            echo "Uw basissalaris plus bonus is: ".$bruto + $bonus;
            echo "<br>";
            echo "Uw belasting is: €". 0.45 * ($bruto + $bonus);
            echo "<br>";
            echo "Uw nettobedrag is: ".$bruto + $bonus - 0.45 * ($bruto + $bonus);
    }


    echo "<br>";
    echo "<br>---- Opgave 28";
    echo "<br>";
    echo "<br>";
    $gewerkteuren = ($gewerkteuren > 40 ? "Ja" : "Nee");
    echo $gewerkteuren;
?>