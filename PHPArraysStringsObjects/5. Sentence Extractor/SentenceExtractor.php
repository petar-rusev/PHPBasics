<!DOCTYPE html>
<html>
<head>
    <title>Sentence Extractor</title>
</head>
<body>
<form method="post">
    <textarea rows="4" cols="50" name="text">
    </textarea>
    <input type="text" name="word">
    <input type="submit" value="Extract">
</form>
<?php
if(isset($_POST["text"])&& isset($_POST["word"])){
    $text=$_POST["text"];
    $word=$_POST["word"];
    $arrSentences=array();
    $positions = array();
    $sentences=array();
    $chars=['!','.','?'];
    for($i=0;$i<strlen($text);$i++){
        if($text[$i]=='!'||$text[$i]=='?'||$text[$i]=='.'){
            array_push($positions,$i);
        }

    }
    $sentence='';
    $start=0;
    for($x=0;$x<sizeof($positions);$x++){
        for($y=$start;$y<=$positions[$x];$y++){
            $sentence.=$text[$y];
        }
        array_push($sentences,$sentence);
        $start=$y;
        $sentence='';
    }
    for($z=0;$z<sizeof($sentences);$z++){
       if(stripos($sentences[$z],' '.$word.' ')){
           echo "<p>".$sentences[$z]."</p>";
       }
    }

}
?>
</body>
</html>