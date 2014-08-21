<!DOCTYPE html>
<html>
<head>
    <title>Annual Expenses</title>
    <script type="text/javascript">
        function calcSum(id){
            var value=0;
            for(var i=0;i<id;i++){
                value+=parseInt(document.getElementById("cell"+i).innerHTML);
            }
            return value;
        }
    </script>
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
        echo "<tr><td id=\"0\">$year</td><td id=\"cell0\">".randExpens()."</td><td id=\"cell1\">".randExpens()."</td><td id=\"cell2\">".randExpens().
            "</td><td id=\"cell3\">".randExpens()."</td><td id=\"cell4\">".randExpens()."</td><td id=\"cell5\">".randExpens()."</td><td id=\"cell6\">".randExpens().
            "</td><td id=\"cell7\">".randExpens()."</td><td id=\"cell8\">".randExpens()."</td><td id=\"cell9\">".randExpens()."</td><td id=\"cell10\">".randExpens().
            "</td><td id=\"cell11\">".randExpens()."</td><td>"."</td></tr>";
    }
    echo "</tbody>";
    echo "<table>";
}
?>
</body>
</html>