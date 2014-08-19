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
    $arrOcc=array();

    for($i=0;$i<sizeof($strTags);$i++){
        $counter = array_count_values($strTags);
        array_push($arrOcc,$counter[$strTags[$i]]);
    }
    $arrOut=array_combine($strTags,$arrOcc);
    arsort($arrOut);
    foreach($arrOut as $key=>$value){
        echo "$key: $value times"."<br>";
    }
    $key = array_search (max($arrOut), $arrOut);
    echo "Most frequent tag is: ". $key."<br>";
}
?>
</body>
</html>