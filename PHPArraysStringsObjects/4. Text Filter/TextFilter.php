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
    foreach ($banned as $word) {
        $text = str_replace($word, str_repeat('*', strlen($word)), $text);
    }
    echo $text;
}
?>
</body>
</html>