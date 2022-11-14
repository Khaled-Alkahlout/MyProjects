<?php
$array = [];
$array[0] = "een";
$array[1] = "twee";
$array[2] = 3;
$array[3] = "vier";

echo "<br>";
echo "Lab 1.05";
echo "<br>";

echo "<br>";
array_push($array, 5);
print_r($array);
echo "<br>";
echo "<br>";

$type = gettype($array[4]);
echo "Datatype is ";
echo $type;
echo "<br>";
echo "<br>";

array_pop($array);
print_r($array);
echo "<br>";
echo "<br>";

array_unshift($array, "nul");
print_r($array);
echo "<br>";
echo "<br>";

unset($array[0]);
print_r($array);
echo "<br>";
echo "<br>";

$datatype = gettype($array[0]);
print_r($datatype);
echo "<br>";
print_r($array);

echo "<br>";
echo "<br>";

unset($array[2]);
print_r($array);
echo "<br>";
echo "<br>";
unset($array[4]);
print_r($array);
echo "<br>";
echo "<br>";
?>