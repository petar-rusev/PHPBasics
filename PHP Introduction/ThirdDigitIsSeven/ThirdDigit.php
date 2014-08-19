<!DOCTYPE html>
<html>
<head>
    <title>Third Digit Check</title>
</head>
<body>
<?php
$digit=strval($_GET["Num"]);
$length=strlen( $digit);
if($length>=3){
if($digit[$length-3]=="7"){
    echo "true";
}
}
else{
    echo "false";
}
?>
</body>
</html>