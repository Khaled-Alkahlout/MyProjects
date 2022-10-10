<?php
echo "<br>---- opgave 5";
$producten = [];
$producten[0] = "boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD's";


echo "<br>";
echo "<br>";
echo "<br>---- Opgave 6: print_r()";
echo "<br>";
echo "<br>";
print_r($producten);


echo "<br>";
echo "<br>---- Opgave 7: var_dump(): ";
echo "<br>";
echo "<br>";
var_dump($producten);


echo "<br>";
echo "<br>---- Opgave 8: ";
echo "<br>";
echo "<br>";
unset($producten[2]);
print_r($producten);


echo "<br>";
echo "<br>---- Opgave 9: ";
echo "<br>";
echo "<br>";
$gevonden = array_key_exists(1, $producten);
echo "Key 1 gevonden?: " . $gevonden;


echo "<br>";
echo "<br>---- Opgave 10: ";
echo "<br>";
echo "<br>";
$gevonden = in_array("boeken", $producten);
echo "Boeken gevonden?: " . $gevonden;


echo "<br>";
echo "<br>---- Opgave 11: ";
echo "<br>";
echo "<br>";
$index = array_search("CD's", $producten);
echo "De index van CD's is: " . $index;


echo "<br>";
echo "<br>---- Opgave 12: ";
array_push($producten, "Laptops");
echo "<br>";
echo "<br>";
print_r($producten);


echo "<br>";
echo "<br>---- Opgave 13: ";
$laatsteElement = array_pop($producten);
echo "<br>";
echo "<br>";
echo $laatsteElement . " is verwijderd ";
echo "<br>";
echo "<br>";
print_r($producten);


echo "<br>";
echo "<br>---- Opgave 14: ";
$eersteElement = array_shift($producten);
echo "<br>";
echo "<br>";
echo $eersteElement . " is verwijderd ";
echo "<br>";
echo "<br>";
print_r($producten);


echo "<br>";
echo "<br>---- Opgave 15: ";
array_unshift($producten, "TV's");
echo "<br>";
echo "<br>";
echo "TV's toegevoegd: ";
echo "<br>";
echo "<br>";
print_r($producten);


echo "<br>";
echo "<br>---- Opgave 16";
$ramdom_keys = array_rand($producten, 2);

echo "<br>";
echo "<br />eerste random product: " . 
$producten[$ramdom_keys[0]];

echo"<br>";
echo "<br />Tweede random product: " . 
$producten[$ramdom_keys[1]];

echo "<br>";
echo "<br>";
echo "---- Opgave 17";
echo "<br>";
function printArray($boeken, $key)
{
    echo "<br>$key" . ": " . "<i> $boeken </i>";
}
echo "<br>---- Opgave 17: Producten array doorlopen: ";
array_walk($producten, 'printArray');


echo "<br>";
echo "<br>---- Opgave 18";
echo "<br>";
$getallen = ["nul", "een", "twee", "dire", "vier", "vijf"];
$tools = ["boek", "pen", "labtop", "potlood"];
$tekst1 = implode("*", $getallen);
echo "<br>---- Opgave 18: Array getallen in tekst converteren: $tekst1";
$tekst2 = implode("|", $tools);
echo "<br>---- Opgave 18: Array tools in tekst2 converteren: $tekst2";


echo "<br>";
echo "<br>---- Opgave 19";
echo "<br>";
echo "<br>---- Opgave 19: Tekst 1 in array 1 converteren: ";
$array1 = explode("*",$tekst1);
array_walk($array1, 'printArray');
echo "<br>---- Opgave 19: Tekst 2 in array 2 converteren: ";
$array2 = explode("|",$tekst2);
array_walk($array2, "printArray");


echo "<br>";
echo "<br>---- Opgave 20";
echo "<br>";
$boeken = array (
    array("title"=> "Stoner", "auteur"=> "John Williams", "genre"=> "Fictie", "prijs"=> 19.99),
    array("title"=> "De cirkel", "auteur"=> "Dave Eggers", "genre"=> "Fictie", "prijs"=> 22.50),
    array("title"=> "Rayuela", "auteur"=> "Julio Cortazar", "genre"=> "Fictie", "prijs"=> 25.50) 
);
echo "<br>---- Opgave 20: Boeken-array aangemaakt. ";


echo "<br>";
echo "<br>---- Opgave 21";
echo "<br>";
echo "<br>---- Opgave 21: Boeken recursief doorlopen: ";
array_walk_recursive($boeken, "printArray");


echo "<br>";
echo "<br>---- Opgave 22";
echo "<br>";
$nieuweboeken = array(
    array("title"=> "spijt", "auteur"=> "Carry Slee", "genre"=> "Fictie", "prijs"=> 12.99),
    array("title"=> "Debet", "auteur"=> "Saskia Noort", "genre"=> "Fictie", "prijs"=> 33.50),
);
echo "<br>---- Opgave 22: Twee arrays samevoegen:";
$boeken = array_merge($boeken, $nieuweboeken);
array_walk_recursive($boeken, "printArray");


echo "<br>";
echo "<br>---- Opgave 23";
echo "<br>";
echo "<br>---- Opgave 23: Array-element kopiëren:";
$oudeboeken = array_slice($boeken, 0, 2);
array_walk_recursive($oudeboeken, "printArray");
?>