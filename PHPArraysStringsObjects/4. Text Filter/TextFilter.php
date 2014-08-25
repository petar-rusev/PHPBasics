<!DOCTYPE html>
<html>
<head>
<title>Text Filter</title>
<head>
<body>
<form method="post">
    <textarea rows="4" cols="50" name="text">
    </textarea>
    <input type="text" name="banned">
    <input type="submit" value="Edit">
</form>
<?php
if(isset($_POST["text"])&& isset($_POST["banned"])){
    $text=$_POST["text"];
    $banned=explode(', ',$_POST["banned"]);
    $replace='';
    $newText='';
    $textlen=strlen($text);
    for($i=0;$i<sizeof($banned);$i++){
        for($x=0;$x<strlen($banned[$i]);$x++){
            $replace.='*';
        }
        if(preg_match("/$banned[$i]/i", $text)){
            $newText.=str_replace($banned[$i],$replace,$text);
        }

        $replace='';
    }
    $result='';
    for($y=0;$y<$textlen;$y++){
        $result.=$newText[$y];
    }
    echo $result;
}
?>
</body>
</html>