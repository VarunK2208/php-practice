<?php

//by using define func
define("ABC","defining constants");
echo ABC;

//using const keyword
class MyClass {
    const NAME = "using const keyword";
}


echo MyClass::NAME;

echo "line number is :" . __LINE__ . "\n";
//accessing constants inside class

class NewClass {
    const NAME = "accessing constants inside class";
    public function getConstant() {
        echo "function " .__FUNCTION__. "\n"; //gives function name
        return self::NAME;
        }
        
}

$obj = new NewClass();
echo $obj->getConstant();
echo "file path is :" . __FILE__ . "\n"; //gives file path 

echo "directory " . __DIR__ . "\n"; //gives directory path




?>