<?php
$integer=5;
$boo=true;
$float=6.4;
$str="This is String";
$arr=array($integer,$boo,$float,$str);
for($i=0;$i<count($arr);$i++){
    echo gettype($arr[$i]),"<br>";
}
?>