<!DOCTYPE html>
<html>
<head>
    <title>Word Mapper</title>
</head>
<body>
<form method="post">
<textarea rows="4" cols="50" name="text">
</textarea><br>
<input type="submit" value="Count Words">
</form>
<?php
if(isset($_POST["text"])){
    $str=$_POST["text"];
    $strCleared=preg_replace('/[^\w\s]/','', $str);
    $strLowered=strtolower($strCleared);
    $explodedStr=explode(' ',$strLowered);
    $arrResult=array_count_values($explodedStr);
    array_values($explodedStr);
    echo "<table border=\"1px\"><tbody>";
    foreach($arrResult as $key=>$value){
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table></tbody>";
}
?>
</body>
</html>