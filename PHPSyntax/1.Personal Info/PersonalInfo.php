<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>
<body>
<form method="get">
    Please enter your first Name:<input type="text" name="first_name"><br>
    Please enter your second Name:<input type="text" name="second_name"><br>
    Please enter your Age:<input type="text" name="age"><br>
    <input type="submit" value="Login"><br>
    </form>
<?php
if(isset ($_GET["first_name"])&&isset ($_GET["second_name"])&& isset($_GET["age"]) ){
$firstName=$_GET["first_name"];
$secondName=$_GET["second_name"];
$age=$_GET["age"];
echo "My name is "."$firstName"." $secondName"." and I am "."$age "." years old";
}
?>
</body>
</html>

