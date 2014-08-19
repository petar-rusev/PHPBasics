<!DOCTYPE html>
<html>
<head>
    <title>Dump Variable</title>
    </head>
<body>

    <?php
    $varFlt=1.234;
    $varInt=1234;
    $varArr=array(1,2,3,4);
    $varStr="Hello";
    $varObj=(object)[1,2,54];
    $varRes=array($varFlt,$varInt,$varArr,$varStr,$varObj);

    for($i=0;$i<sizeof($varRes);$i++){
        if(is_int($varRes[$i])){
            var_dump($varRes[$i]);
        }
        if(is_double($varRes[$i])){
            var_dump($varRes[$i]);
        }
        if(is_array($varRes[$i])){
            echo gettype($varRes[$i])."<br>";
        }
        if(is_object($varRes[$i])){
            echo gettype($varRes[$i])."<br>";
        }
    }
    ?>

</body>

</html>