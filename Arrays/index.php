<?php
//arrays
$fruits = array("banana","apple","grapes");

echo $fruits[0] ; //banana
echo $fruits[1] ; //apple
echo $fruits[2] ; //grapes

//associative arrays 

$student = array("V"=>2, "B"=>3 , "A"=>4);
echo $student["V"] ; //2
echo $student["B"] ; //3
echo $student["A"] ; //4
//printing everything using loops 

foreach($student as $key => $value){
    echo $key."-".$value;
}

//multidimensional arrays 

$vehicles = array( array("bikes","cars"), array("yahama","tvs"), array("Honda","skoda"));

print_r($vehicles);

//sorting arrays 
//ascending order
sort($fruits);
print_r($fruits);
//descending order
rsort($fruits);
print_r($fruits);
//by key
arsort($student);
print_r($student);
//by key descending
ksort($vehicles);
print_r($vehicles);
//by key ascending
ksort($student);
print_r($student);
//by key descening 
krsort($student);
print_r($student);
?>