<!DOCTYPE html>
    <html>
<head>
    <title>HTML Information table</title>
    <link rel="stylesheet" type="text/css" href="StyleTable.css">
</head>
<body>
<div>
<form method="get">
    Name:<input type="text" name="Name">
    Phone:<input type="text" name="Phone">
    Age:<input type="text" name="Age">
    Address:<input type="text" name="Address">
    <input type="submit" value="Submit">
    </form>
</div>
    <?php
    if(isset($_GET["Name"]) && isset($_GET["Phone"]) && isset($_GET["Age"]) && isset($_GET["Address"])){
        $name=$_GET["Name"];
        $phone=$_GET["Phone"];
        $age=$_GET["Age"];
        $address=$_GET["Address"];
        echo "<div>";
        echo "<table>";
        echo "<tbody>";
        echo "<tr><td class=\"fill\">Name</td><td>$name</td></tr>";
        echo "<tr><td class=\"fill\">Phone Number</td><td>$phone</td></tr>";
        echo "<tr><td class=\"fill\">Age</td><td>$age</td></tr>";
        echo "<tr><td class=\"fill\">Address</td><td>$address</td></tr>";
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
    ?>

</body>
</html>
