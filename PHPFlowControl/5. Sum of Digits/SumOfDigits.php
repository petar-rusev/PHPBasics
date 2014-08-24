<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
</head>
<body>
<form method="post">
    Input String:<input type="text" name="input">
    <input type="submit" value="Submit">
</form>

<?php
    if(isset($_POST["input"])){
        echo "<table border=\"1px\">
        <tbody>";
        $str=$_POST["input"];
        $strMod=explode(',',$str);
        $sum=0;

        for($i=0;$i<sizeof($strMod);$i++){
            $num=$strMod[$i];
            $type=gettype($num);

            if(is_numeric($num)){
            for($x=0;$x<strlen($strMod[$i]);$x++){
                $sum+=$num[$x];
            }
            echo "<tr><td>$num</td><td>$sum</td></tr>";
            $sum=0;
        }
            else{
                echo "<tr><td>$num</td><td>I can not sum that</td></tr>";
            }


        }


    }
echo "</tbody></table>";
?>

</body>
</html>