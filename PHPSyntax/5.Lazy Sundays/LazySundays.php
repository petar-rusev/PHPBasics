<!DOCTYPE html>
<html>
<head>
    <title>Lazy Sundays</title>
    </head>
<body>
<?php
function check_day($date){
    return(date('N',strtotime($date))>6);
}
?>
<?php
$augustDays=array();
for($i=1;$i<=31;$i++){
    array_push($augustDays,$i);
}
for($x=0;$x<=sizeof($augustDays);$x++){
    if(check_day("2014-"."08-"."$x")==7){
        echo "$x"."th "."August".",2014"."<br>";
    }
}
?>
</body>

</html>