<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence</title>
</head>
<body>
<?php
$numN=$_GET["Num"];
$temp=0;
$tempSec=1;
$resArr=array();
array_push($resArr,$temp);
array_push($resArr,$tempSec);
for($i=1;$i<$numN;$i++){
    array_push($resArr,$resArr[$i-1]+$resArr[$i]);
}
for($x=0;$x<sizeof($resArr)-1;$x++){
    echo "$resArr[$x] ";
}
?>
</body>
</html>