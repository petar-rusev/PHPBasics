<!DOCTYPE html>
<html>
<head>
    <title>Square root Sum</title>
</head>
<body>
<?php
echo "<table border=\"1px\">";
echo "<tbody>";
$num=0;
for($i=0;$i<=100;$i+=2){
    $numSqrt=round(sqrt($i),2);
    echo "<tr><td>$i</td><td>$numSqrt</td></tr>";
}
echo "</tbody>";
echo "</table>";
?>
</body>
</html>