<?php
$name = "VK";
$add = "Bowenpally";

$age = 22;
$pin = 500011;

$percent = 77.77;
$price = 20.00;

$total = null;

$quantity = 10;

$employee = true;

echo "{$name} stays in {$add} <br>";
echo "{$name} is {$age} years old  <br>";
echo "{$pin} is the pincode of {$add} <br>";
echo "{$name} scored {$percent} <br>";
echo "price of a ball is {$price} <br>";
echo "status : {$employee} <br>";
$total = $quantity * $price ;
echo "price of {$quantity} balls is {$total} ";

//Arthemetic Operations

$x = 12;
$y = 5;

$z = $x + $y;
$c = $x - $y;
$d = $x * $y;
$a = $x / $y;
$q = $x % $y;
$t = $x ** $y;

$x++;
$y--;

echo $z;
echo $c;
echo $d;
echo $a;
echo $q;
echo $t;
echo $x;
echo $y;

?>

