<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleColor.css">
    <title>Text Colorer</title>
</head>
<body>
<form method="post">
    <textarea cols="50" rows="4" name="text">
    </textarea><br>
    <input type="submit" value="Color text">
</form>
<?php
if(isset($_POST["text"])){
    $str=$_POST["text"];
    $strExp=explode(' ',$str);
    $strAll="";
    for($i=0;$i<sizeof($strExp);$i++){
       $strAll.=$strExp[$i];
    }

    for($x=0;$x<strlen($strAll);$x++){
    $strChar=ord($strAll[$x]);
    $color="";
    if($strChar%2==0){
        $color="red";
    }
    else{
        $color="blue";
    }

        echo "<font size=\"10\" class=$color>".$strAll[$x]."</font>";
    }
}
?>
</body>
</html>