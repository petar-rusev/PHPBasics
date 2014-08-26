<!DOCTYPE html>
<html>
<head>
    <title>URL Replacer</title>
</head>
<body>
<form method="post">
<textarea rows="4" cols="50" name="text">
</textarea>
<input type="submit" value="Replace">
</form>
<?php
if(isset($_POST["text"])){
$text=$_POST["text"];
$arrReplace=['<a href="','">','</a>'];
$arrPut=['[URL=',']','[/URL]'];
$strURL='';
for($i=0;$i<sizeof($arrReplace);$i++){
    $text=str_replace($arrReplace[$i],$arrPut[$i],$text);
}
$specStr=htmlspecialchars($text);
echo $specStr;

}
?>
</body>
</html>