<?php

$x = 12;
$y = 15;

//if else if else statement
if($x > 14) {
    echo "x is greater than 14";
} else {
    echo "x is less than or equal to 14";
}

if($y > 12 && $y < 18) {
    echo " y is between 12 and 18";
} else if ($y < 12 ) {
    echo "y is less than 12";
} else { 
    echo " y is nothing ";
}


//switch statement
$z = "KARTHIK";
switch ($z) {
    case "VARUN":
        echo "Hello Varun";
        break;
    case "AKASH";
    echo "Hello Akash";
    break;
    case "KARTHIK";
    echo "Hello Karthik";
    break;
    default:
    echo "Hello World";
    break;
    }

    for($v = 0;$v<10;$v++) {
        echo $v;
    }

    $q = 1;
    while($q <=10) {
        echo $q;
        $q++;
    }

    $w = 1;
    do {
        echo $w;
        $w++;
        } while ($w <= 10);


$ar = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,20];
foreach ($ar as $value) {
    if($value % 2 == 0) {
        continue;
        }
        echo $value;
        
        if ($value === 13) {
            break;
            }
}
?>