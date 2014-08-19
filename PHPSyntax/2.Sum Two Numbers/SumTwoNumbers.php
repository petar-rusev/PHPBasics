<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>
<body>
<form method="get">
    First number:<input type="text" name="first"><br>
    Second number:<input type="text" name="second"><br>
    <input type="submit" value="Submit"><br>
</form>
<?php

if(isset ($_GET["first"])&&isset ($_GET["second"]) ){
    if(is_numeric($_GET["first"])&&is_numeric($_GET["second"])){
    $numOne=floatval($_GET["first"]);
    $numTwo=floatval($_GET["second"]);
    $result=round($numOne+$numTwo,2);
    echo "\$firstNumber + \$secondNumber = "."$numOne + $numTwo = "."$result";
    }
    else{
        echo "The given inputs for the first and second number are not a numbers!!!"."<br>";
        echo "Please enter either an integer or floating point number.";
    }
}
?>
</body>
</html>