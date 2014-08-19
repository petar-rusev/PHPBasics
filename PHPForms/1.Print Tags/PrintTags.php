<!DOCTYPE html>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
<p>Enter tags:</p>
<form method="post">
    <input type="text" name="tags">
    <input type="submit" value="Submit">
</form>
<?php
if(isset($_POST["tags"])){
    $tags=$_POST["tags"];
    $strTags=explode(', ',$tags);
    for($i=0;$i<sizeof($strTags);$i++){
        echo "$i: $strTags[$i]"."<br>";
    }
}
?>
</body>
</html>