<?php

function add($n1,$n2) {
    return $n1 + $n2;
}
echo add(5,6);

function abcd ($name, $age) {
    echo "Name: $name, Age: $age";
    }
    abcd("John", 25);

$multi = fn($b,$c) => $b * $c;
echo $multi(6,7);

$number = [1,3,4,5,6,72,1,356,7,11,23,22];
$fac = array_filter($number, fn($n) => $n % 2 == 0);
print_r($fac);

$num = 21;
$multipy = fn($m) => $m * $num;

echo $multipy(2);

$p = [1,2,3,3,4,5,6,7];


$red = fn($k, $l) => $k + $l; 

$sum = array_reduce($p, $red, 0); 

echo $sum; 
?>


