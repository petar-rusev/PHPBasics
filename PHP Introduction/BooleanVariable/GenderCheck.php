<!DOCTYPE html>
<html>
<head>
    <title>Gender</title>
</head>
<body>
<?php
$IsFemale=true;
$Gender=($_GET["Gender"]);
$Gender=strtolower($Gender);
if($Gender=="male"){
    $IsFemale=true;
}
if($Gender=="female"){
    $IsFemale=false;
}
if($IsFemale==true){
    echo "Is Female - FALSE";
}
else{
    echo "Is Female - TRUE";
}
?>
</body>
</html>