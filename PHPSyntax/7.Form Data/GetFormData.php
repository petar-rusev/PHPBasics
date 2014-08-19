<!DOCTYPE html>
    <html>
<head>
    <title>Get Form Data</title>
</head>
<body>
<form method="get">
    <input type="text" name="name" value="Name..."><br>
    <input type="text" name="years" value="Age..."><br>
    <input type="radio" name="sex" value="male">Male<br>
    <input type="radio" name="sex" value="female">Male<br>
    <input type="submit" value="Submit"><br>
    </form>
<?php
if(isset($_GET["name"])&& isset($_GET["years"])&& isset($_GET["sex"])){
    $name=$_GET["name"];
    $age=$_GET["years"];
    $sex=$_GET["sex"];
    echo "My name is $name. "."I am $age years old. "."I am $sex";
}
?>
</body>
</html>