//regex 

<?php
//checking email is correct or not with preg_match
$email = "something@gmail.com";
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/";

if(preg_match($pattern, $email)) {
    echo "Email is valid";
    } else {
        echo "Email is not valid";
}
//checks the whole sentence and tells whether number is found or not
$text = "it costs 30 rupees";
$match = "/\d+/";
if(preg_match_all($match, $text,$num)) {
    print_r($num);
}

//replace
$text1 = "it costs rupees";
$spl = "/\s+/";
$replace = "-";
$a = preg_replace($spl, $replace, $text1);
echo $a;

//using replace_callback() 
$text = "it costs 30 rupees";
$pattern = "/\d+/";

$new = preg_replace_callback($pattern, function($match) {
    return $match[0] * 2;
    }, $text);

    echo $new;

    //preg_split()
$fruits = "apple, banana, orange";
$pattern = "/[\s,]+/";
$text = preg_split($pattern,$fruits);
print_r($text);


echo "Today date is";
$today = date("d/m/Y");
$day = date("d-m-Y");


echo $today;

$file = fopen("index.php","r");
if($file) {
    echo "File opened ";
    fclose($file);
} else {
    echo "Failed";
}

$fle = fopen("index.php","r");
$cont = fread($fle, filesize("index.php"));
echo $cont;
fclose($fle);

?>