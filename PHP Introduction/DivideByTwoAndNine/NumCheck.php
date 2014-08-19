<!DOCTYPE html>
<html>
<head>
    <title>Check Number</title>
</head>
<body>
<?php
$numCheck=$_GET["Num"];
if($numCheck%2==0&&$numCheck%9==0){
    echo "true";
}
else{
    echo "false";
}
?>
</body>
</html>