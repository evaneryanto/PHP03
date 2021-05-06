<?php
require_once ('Animal.php');
require_once ('Frog.php');
require_once ('Ape.php');

$sheep = new Animal("shaun");

echo "Name: " . $sheep->get_name() . "<br>"; // "shaun"
echo "legs = " . $sheep->get_legs() . "<br>"; // 4
echo "cold Blood? ". $sheep->get_blood() . "<br><br>"; // "no"

echo "Soal No 2 <br><br>";

// No 2
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->get_name() . "<br>"; // "shaun"
echo "legs = " . $sungokong->get_legs() . "<br>"; // 4
echo "cold Blood? ". $sungokong->get_blood() . "<br>"; // "no"
echo $sungokong->yell() . "<br><br>";

$kodok = new Frog("buduk");
echo "Name: " . $kodok->get_name() . "<br>"; // "shaun"
echo "legs = " . $kodok->get_legs() . "<br>"; // 4
echo "cold Blood? ". $kodok->get_blood() . "<br>"; // "no"
echo $kodok->jump() . "<br><br>";



?>