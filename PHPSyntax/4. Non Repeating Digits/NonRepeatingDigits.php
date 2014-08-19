<!DOCTYPE html>
<html>
<head>
    <title>Non Repeating Numbers</title>
</head>
<body>
<form method="get">
    Number:<input type="number" name="Num"><br>
    <input type="submit" value="Submit"><br>
</form>
<?php
function check_num($var){
    $varBool=false;
    $varStr=(string)$var;
    if(intval($varStr[0])==intval($varStr[1])||intval($varStr[0])==intval($varStr[2])||intval($varStr[1])==intval($varStr[2])){
        $varBool=true;
    }
    return $varBool;
}
?>
<?php
if(isset($_GET["Num"])){
    $num=$_GET["Num"];
    if($num<102){
        echo "No";
    }
    else{
        for($i=102;$i<=$num;$i++){
           if(check_num($i)){
               continue;
           }
            else{
                echo $i.", ";
            }
        }
    }
}
?>
</body>
</html>