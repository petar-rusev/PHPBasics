<!DOCTYPE html>
<html>
<head>
<title>String Modifier</title>
</head>
<body>
<form method="post">
    <input type="text" name="string">
    <input type="radio" value="CheckPal" name="Palindrome">Check Palindrome
    <input type="radio" value="Reverse" name="Reverse">Reverse String
    <input type="radio" value="Split" name="Split">Split
    <input type="radio" value="Hash" name="Hash">Hash String
    <input type="radio" value="Shuffle" name="Shuffle">Shuffle String
    <input type="submit" value="Submit">
</form>
<?php
function palCheck($text){
    $strCheck=explode(" ",$text);
    $strRev="";
    $initText="";
    for($y=0;$y<sizeof($strCheck);$y++){
        $initText.=$strCheck[$y];
    }
    for($i=sizeof($strCheck)-1;$i>=0;$i--){
        $word=$strCheck[$i];
        for($x=strlen($strCheck[$i])-1;$x>=0;$x--){
            $strRev.=$word[$x];
        }

    }
    if(strtolower($strRev)==strtolower($initText)){
        echo $text." is Palindrome!";
    }
    else{
        echo $text." is not a Palindrome!";
    }

}
function revString($text){
    $revText="";
    for($i=strlen($text)-1;$i>=0;$i--){
        $revText.=$text[$i];
    }
    echo $revText;
}
function splitString($text){
    $arrStr=explode(" ",$text);
    $splitedString="";
    for($i=0;$i<sizeof($arrStr);$i++){
        $splitedString.=$arrStr[$i];
    }
    echo $splitedString;
}
function hashString($text){
    $encStr=crypt($text);
    echo $encStr;
}
function shuffleString($text){

}
if(isset($_POST["string"])){
    $textStr=$_POST["string"];
    if(isset($_POST["Palindrome"])){
        $strOut1=palCheck($textStr);
        echo $strOut1."<br>";
    }
    if(isset($_POST["Reverse"])){
        $strOut2=revString($textStr);
        echo $strOut2."<br>";
    }
    if(isset($_POST["Split"])){
        $strOut3=splitString($textStr);
        echo $strOut3."<br>";
    }
    if(isset($_POST["Hash"])){
        $strOut4=hashString($textStr);
        echo $strOut4."<br>";
    }
    if(isset($_POST["Shuffle"])){
        $strShuffled=str_shuffle($textStr);
        echo $strShuffled."<br>";
    }
}
?>
</body>
</html>