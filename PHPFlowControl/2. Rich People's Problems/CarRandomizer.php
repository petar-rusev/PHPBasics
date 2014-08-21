<!DOCTYPE html>
<html>
<head>
    <title>Car Randomizer</title>
</head>
<body>
<form method="post">
Enter Cars<input type="text" name="cars">
    <input type="submit" value="Show Result">
</form>
<?php
if (isset($_POST["cars"])){
    $cars=explode(', ',$_POST["cars"]);
    $colors=['black','white','red','yellow','blue'];

    echo "<table border=\"1px\">";
    echo "<thead><th>Car</th><th>Color</th><th>Count</th></thead>";
    echo "<tbody>";
    for($i=0;$i<sizeof($cars);$i++){
        $color=$colors[rand(0,sizeof($colors)-1)];
        $quantity=rand(1,5);
        $car=$cars[rand(0,sizeof($cars)-1)];
        echo "<tr><td>$car</td><td>$color</td><td>$quantity</td><tr>";

    }
    echo "<tbody>";
    echo "</table>";
}
?>
</body>
</html>
