<?php
session_start();
?>
<!DOCTYPE html>
    <html>
<head>
    <title>HTML Tag counter</title>
</head>
<body>
<form method="post">
    <input type="text" name="tag">
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['tag'])){
$tags=['abbr','acronym','address','applet','area','base','basefont','big','blink','blockquote','body',
'br','b','button','caption','center','cite','code',
'col','dfn','dir','div','dl','dt','dd','em','font','form','h1','h2','h3','h4','h5','h6','head'
,'hr','html','img','input','isindex','i','kbd','link','li','map','marquee',
'menu','meta','ol','option','param','pre','p','q','samp','script','select','small','span','strikeout',
'strong','style','sub','sup','table','td','textarea',
'th','tbody','thead','tfoot','title','tr','tt','ul','u','var'];

    $tag=$_POST["tag"];
    if(!isset($_SESSION['count'])){
        $_SESSION['count']=0;
    }

    if(array_search($tag,$tags)!==false){
    echo "<h1>Valid HTML tag!</h1>";
        $_SESSION['count']++;
        echo "Score: ".$_SESSION['count'];
    }
    else{
        echo "<h1>Invalid HTML tag</h1>";
        $_SESSION['count']--;
        echo "Score: ".$_SESSION['count'];
    }

}
?>
</body>
</html>