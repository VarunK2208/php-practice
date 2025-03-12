<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="Username">Username</label> <br>
        <input type="text" name="Username"> <br>  <!-- Added name="Username" -->
        
        <label for="Password">Password</label> <br>
        <input type="password" name="Password"> <br>  <!-- Added name="Password" -->
        
        <input type="submit" value="Submit">
    </form>

    <?php 
  
        $username = $_POST["Username"];
        $password = $_POST["Password"];

        echo "Username: $username <br>";
        echo "Password: $password <br>";

    
    ?>

</body>
</html>
