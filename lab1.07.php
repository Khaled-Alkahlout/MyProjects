<?php
$boeken = array (
    array("titel" => "Stoner", "auteur" => "John Willians", "genre" => "Fictie", "prijs" => 19.99),
    array("titel" => "De cirkel", "auteur" => "Dave Eggers", "genre" => "Fictie", "prijs" => 22.50),
    array("titel" => "Rayuela", "auteur" => "Cortazar", "genre" => "Fictie", "prijs" => 25.50) 
);

function prijsLijst($item, $key)
{
    echo "prijs: ";

if($item['prijs'] >= 19.99 )
{
    echo "".$item['prijs'];
}

echo "<br>";

}

array_walk($boeken, "prijslijst");
?>