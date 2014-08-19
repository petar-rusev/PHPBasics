<!DOCTYPE html>
<html>
<head>
    <title>Calculate Interest</title>

</head>
<body>
<form method="post">
    <input type="text" name="amount"><br>
    USD<input type="radio" value="$" name="currency">
    EUR<input type="radio" value=&euro; name="currency">
    BGN<input type="radio" value="lv." name="currency"><br>
    Compound Interest Amount<input type="number" name="interest"><br>
    <select name="period">
        <option value="0.5">6 months</option>
        <option value="1">1 year</option>
        <option value="2">2 years</option>
        <option value="5">5 years</option>
    </select>
    <input type="submit" value="Calculate">
</form>

<?php
if(isset($_POST["amount"])){
    $amount=floatval($_POST["amount"]);
    if($amount<1){
        echo "Please enter a number greater than 0.";
        die;
    }
    $currency=$_POST["currency"];
    $period=$_POST["period"];
    $interest=$_POST["interest"];
    $timesCompounded=12;
    $powCompound=$timesCompounded*$period;
    $percInt=$interest/100;
    $result=(1+($percInt/$timesCompounded));
    $compInterest=pow($result,$powCompound);
    $calcInterest=$amount*$compInterest;


    echo "$currency ".round($calcInterest,2);


}
?>
</body>
</html>