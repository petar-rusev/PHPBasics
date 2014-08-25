<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleBars.css">
    <title>Side Bar Builder</title>
</head>
<body>
<div>
<form method="post">
    Categories:<input type="text" name="categories"><br>
    Tags:<input type="text" name="tags"><br>
    Months:<input type="text" name="months"><br>
    <input type="submit" value="Generate">
</form>
<div>
<?php
if(isset($_POST["categories"])&& isset($_POST["tags"])&& isset($_POST["months"])){
    $cat=explode(', ',$_POST["categories"]);
    $tag=explode(', ',$_POST["tags"]);
    $month=explode(', ',$_POST["months"]);

    $arrBars=[$cat,$tag,$month];
    $heads=["Categories","Tags","Months"];
    for($i=0;$i<sizeof($arrBars);$i++){

        echo "<aside>";
        echo "<div id=\"cont\">";
        echo "<h1 class=\"underlined\">".$heads[$i]."</h1>";
        echo "<hr>";
        echo "<ul>";
        $text=$arrBars[$i];
        for($x=0;$x<sizeof($text);$x++){
            echo "<li>".$text[$x]."</li>";
        }
        echo "</ul>";
        echo "</div>";
        echo "</aside>"."<br>"."<br>";

    }

}

?>
</body>
</html>