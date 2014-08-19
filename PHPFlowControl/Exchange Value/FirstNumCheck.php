<!DOCTYPE html>
<html>
<head>
    <title>Change numbers</title>
    </head>
<body>
<?php
function num_check($a,$b){
$a=$_GET["FirstNum"];
$b=$_GET["SecNum"];
if($a>$b){
$temp=$a;
$a=$b;
$b=$temp;
echo "$a - "." $b ";
}
else{
echo "The numbers are equal or the first one is not greater than the second.";
}
}
?>
</body>
</html>