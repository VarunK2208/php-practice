<?php
$error = "";
$firstname = $lastname = $address = $emailaddress = $password = $gender = "";

if(isset($_POST['submit']))
{
    if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['emailaddress']) || empty($_POST['password']) || empty($_POST['gender']))
    {
        $error = "* Please fill all the required fields.";
    }
    else {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $address = htmlspecialchars($_POST['address']);
        $emailaddress = filter_var($_POST['emailaddress'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
        $gender = htmlspecialchars($_POST['gender']);
    }
}
?>

<html>
<head>
<title>Form Processing</title>
</head>
<body>
<h1>Form using PHP</h1>
<fieldset>
<form id="form1" action="" method="post">
<?php
if (isset($_POST['submit']) && !empty($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>
Firstname:
<input type="text" name="firstname" value="<?php echo $firstname; ?>" />
<span style="color: red;"></span>
<br><br>

Lastname:
<input type="text" name="lastname" value="<?php echo $lastname; ?>" />
<span style="color: red;"></span>
<br><br>

Address:
<input type="text" name="address" value="<?php echo $address; ?>" />
<span style="color: red;"></span>
<br><br>

Email:
<input type="email" name="emailaddress" value="<?php echo $emailaddress; ?>" />
<span style="color: red;"></span>
<br><br>

Password:
<input type="password" name="password" />
<span style="color: red;"></span>
<br><br>

Gender:
<input type="radio" value="Male" name="gender" <?php if ($gender == "Male") echo "checked"; ?>>Male
<input type="radio" value="Female" name="gender" <?php if ($gender == "Female") echo "checked"; ?>>Female
<br><br>

<input type="submit" value="Submit" name="submit">
</form>
</fieldset>

<?php
if(isset($_POST['submit']) && empty($error))
{
    echo "<h1>INPUT RECEIVED</h1><br>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>Parameter</th>";
    echo "<th>Value</th>";
    echo "</thead>";
    echo "<tr><td>Firstname</td><td>$firstname</td></tr>";
    echo "<tr><td>Lastname</td><td>$lastname</td></tr>";
    echo "<tr><td>Address</td><td>$address</td></tr>";
    echo "<tr><td>Email</td><td>$emailaddress</td></tr>";
    echo "<tr><td>Password</td><td>******** (hidden)</td></tr>";
    echo "<tr><td>Gender</td><td>$gender</td></tr>";
    echo "</table>";
}
?>
</body>
</html>
