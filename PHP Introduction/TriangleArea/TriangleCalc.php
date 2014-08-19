<!DOCTYPE html>
<html>
<head>
    <title>Calculated Area</title>
</head>
<body>
<?php
$Ax=$_GET["Ax"];
$Ay=$_GET["Ay"];
$Bx=$_GET["Bx"];
$By=$_GET["By"];
$Cx=$_GET["Cx"];
$Cy=$_GET["Cy"];
$area=0;
$area=abs(($Ax*($By-$Cy)+$Bx*($Cy-$Ay)+$Cx*($Ay-$By))/2);
if($area<=0){
    echo "The given points does not create triangle! - 0";
}
if($area!=0){
echo "The area of the triangle formed"."\n"."by the given points is $area";
}
?>
</body>
</html>