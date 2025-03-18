//SUPERGLOBALS 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="name"> name </label><br>
    <input type="text" name="name" id="name"><br>
    <label for="age"> age </label>
    <input type="number" name="age" id="age"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php 

$x = 50;
$y = 100;

function multi() {
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
multi();
echo $z;

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
//post
 $nm = $_POST['name'];
 $ag = $_POST['age'];

 echo $nm;
 echo "<br>";
 echo $ag;



?>