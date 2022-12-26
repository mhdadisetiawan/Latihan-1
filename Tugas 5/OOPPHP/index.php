<?php

require_once('animal.php');
require_once('frog.php');

$animal = new animal("shaun");

echo "Nama : " . $animal->nama . "<br>";
echo "Legs : " . $animal->legs . "<br>";
echo "coldblooded : " . $animal->coldblooded . "<br><br>";


$kodok = new frog("buduk");

echo "Nama : " . $kodok->nama . "<br>";
echo "Legs : " . $kodok->legs . "<br>";
echo "coldblooded : " . $kodok->coldblooded . "<br>";
echo "Jump : " . $kodok->jump . "<br><br>";

$sungokong = new kerasakti("kera sakti");

echo "Nama : " . $sungokong->nama . "<br>";
echo "Legs : " . $sungokong->legs . "<br>";
echo "coldblooded : " . $sungokong->coldblooded . "<br>";
echo "Yell : " . $sungokong->yell . "<br>";

?>