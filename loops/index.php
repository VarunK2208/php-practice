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



?>