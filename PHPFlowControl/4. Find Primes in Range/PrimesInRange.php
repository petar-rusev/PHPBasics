<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylePrimes.css">
    <title>Primes in Range</title>
</head>
<body>
<form method="post">
    Starting Index:<input type="text" name="startInd">
    End:<input type="text" name="endInd">
    <input type="submit" value="Submit">
</form>
<?php
function primeCheck($num){
    if($num<=3){
        if($num<=1){
            return false;
        }
        else{
            return true;
        }

    }
    if($num%2==0 || $num%3==0){
        return false;
    }
    for($i=5;$i<sqrt($num)+1;$i+=6){
        if($num%$i==0 || $num%($i+2)==0){
            return false;
        }
    }
    return true;
}
?>
<?php
if(isset($_POST["startInd"])&&(isset($_POST["endInd"]))){
    $start=$_POST["startInd"];
    $end=$_POST["endInd"];
    $arrayPrimes=array();
    for($i=$start;$i<=$end;$i++){
        if(primeCheck($i)==true){
            array_push($arrayPrimes,"<b>$i</b>");
        }
        else{
            array_push($arrayPrimes,$i);
        }

    }
    $listPrimes=rtrim(implode(',', $arrayPrimes), ',');
    echo "<div id=\"list\">$listPrimes</div>";

}
?>
</body>
</html>