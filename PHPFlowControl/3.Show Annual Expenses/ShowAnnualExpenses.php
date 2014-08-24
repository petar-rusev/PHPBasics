<!DOCTYPE html>
<html>
<head>
    <title>Annual Expenses</title>
</head>
<body>
<form method="post">
    Enter Number of years<input type="text" name="years">
    <input type="submit" value="Show Costs">
</form>

<?php
if(isset($_POST["years"])){
    $yearNow=date('Y');
    echo "<table id=\"expenses\" border=\"1px\">";
    echo "<thead><th>Year</th><th>January</th><th>February</th><th>March</th><th>April</th>".
        "<th>May</th><th>June</th><th>July</th><th>August</th><th>September</th><th>October</th><th>November</th>".
        "<th>December</th><th>Total</th></thead>";
    echo "<tbody>";
    function randExpens(){
        $randValue=rand(0,999);
        return $randValue;
    }

    for($i=0;$i<$_POST["years"];$i++){
        $year=$yearNow-$i;
        $jan=randExpens();
        $feb=randExpens();
        $mar=randExpens();
        $apr=randExpens();
        $may=randExpens();
        $jun=randExpens();
        $jul=randExpens();
        $aug=randExpens();
        $sep=randExpens();
        $oct=randExpens();
        $nov=randExpens();
        $dec=randExpens();
        $sum=intval($jan+$feb+$mar+$apr+$may+$jun+$jul+$aug+$sep+$oct+$nov+$dec);
        echo "<tr><td id=\"0\">$year</td><td id=\"cell0\">".$jan."</td><td id=\"cell1\">".$feb."</td><td id=\"cell2\">".$mar.
                        "</td><td id=\"cell3\">".$apr."</td><td id=\"cell4\">".$may."</td><td id=\"cell5\">".$jun."</td><td id=\"cell6\">".$jul.
                        "</td><td id=\"cell7\">".$aug."</td><td id=\"cell8\">".$sep."</td><td id=\"cell9\">".$oct."</td><td id=\"cell10\">".$nov.
                        "</td>"."<td id=\"cell11\">".$dec."</td>".
                        "<td>".$sum."</td>"."</tr>";
    }
    echo "</tbody>";
    echo "<table>";
}
?>
</body>
</html>