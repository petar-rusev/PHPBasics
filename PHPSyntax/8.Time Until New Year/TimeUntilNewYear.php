<!DOCTYPE html>
    <html>
<head>
    <title>Time Until New Year</title>
    <link rel="stylesheet" type="text/css" href="stylesNewYear.css">
    </head>
<body>
<?php
//include all defined functions from the file TimeExtract.php
include 'TimeExtract.php';
//will set drop down menu for change the time zones.
echo "<form method=\"post\">";
echo "<select name=\"zones[]\" multiple=\"multiple\">";
echo "<option value=\"Europe/Amsterdam\">Europe/Amsterdam</option>";
echo "<option value=\"Europe/Andorra\">Europe/Andorra</option>";
echo "<option value=\"Europe/Athens\">Europe/Athens</option>";
echo "<option value=\"Europe/Belfast\">Europe/Belfast</option>";
echo "<option value=\"Europe/Belgrade\">Europe/Belgrade</option>";
echo "<option value=\"Europe/Berlin\">Europe/Berlin</option>";
echo "<option value=\"Europe/Bratislava\">Europe/Bratislava</option>";
echo "<option value=\"Europe/Brussels\">Europe/Brussels</option>";
echo "<option value=\"Europe/Bucharest\">Europe/Bucharest</option>";
echo "<option value=\"Europe/Budapest\">Europe/Budapest</option>";
echo "<option value=\"Europe/Chisinau\">Europe/Chisinau</option>";
echo "<option value=\"Europe/Copenhagen\">Europe/Copenhagen</option>";
echo "<option value=\"Europe/Dublin\">Europe/Dublin</option>";
echo "<option value=\"Europe/Gibraltar\">Europe/Gibraltar</option>";
echo "<option value=\"Europe/Guernsey\">Europe/Guernsey</option>";
echo "<option value=\"Europe/Helsinki\">Europe/Helsinki</option>";
echo "<option value=\"Europe/Isle_of_Man\">Europe/Isle_of_Man</option>";
echo "<option value=\"Europe/Istanbul\">Europe/Istanbul</option>";
echo "<option value=\"Europe/Jersey\">Europe/Jersey</option>";
echo "<option value=\"Europe/Kaliningrad\">Europe/Kaliningrad</option>";
echo "<option value=\"Europe/Kiev\">Europe/Kiev</option>";
echo "<option value=\"Europe/Lisbon\">Europe/Lisbon</option>";
echo "<option value=\"Europe/Ljubljana\">Europe/Ljubljana</option>";
echo "<option value=\"Europe/London\">Europe/London</option>";
echo "<option value=\"Europe/Luxembourg\">Europe/Luxembourg</option>";
echo "<option value=\"Europe/Madrid\">Europe/Madrid</option>";
echo "<option value=\"Europe/Malta\">Europe/Malta</option>";
echo "<option value=\"Europe/Mariehamn\">Europe/Mariehamn</option>";
echo "<option value=\"Europe/Minsk\">Europe/Minsk</option>";
echo "<option value=\"Europe/Monaco\">Europe/Monaco</option>";
echo "<option value=\"Europe/Moscow\">Europe/Moscow</option>";
echo "<option value=\"Europe/Nicosia\">Europe/Nicosia</option>";
echo "<option value=\"Europe/Oslo\">Europe/Oslo</option>";
echo "<option value=\"Europe/Paris\">Europe/Paris</option>";
echo "<option value=\"Europe/Podgorica\">Europe/Podgorica</option>";
echo "<option value=\"Europe/Prague\">Europe/Prague</option>";
echo "<option value=\"Europe/Riga\">Europe/Riga</option>";
echo "<option value=\"Europe/Rome\">Europe/Rome</option>";
echo "<option value=\"Europe/Samara\">Europe/Samara</option>";
echo "<option value=\"Europe/San_Marino\">Europe/San_Marino</option>";
echo "<option value=\"Europe/Sarajevo\">Europe/Sarajevo</option>";
echo "<option value=\"Europe/Simferopol\">Europe/Simferopol</option>";
echo "<option value=\"Europe/Skopje\">Europe/Skopje</option>";
echo "<option value=\"Europe/Sofia\">Europe/Sofia</option>";
echo "<option value=\"Europe/Stockholm\">Europe/Stockholm</option>";
echo "<option value=\"Europe/Tallinn\">Europe/Tallinn</option>";
echo "<option value=\"Europe/Tirane\">Europe/Tirane</option>";
echo "<option value=\"Europe/Tiraspol\">Europe/Tiraspol</option>";
echo "<option value=\"Europe/Uzhgorod\">Europe/Uzhgorod</option>";
echo "<option value=\"Europe/Vaduz\">Europe/Vaduz</option>";
echo "<option value=\"Europe/Vatican\">Europe/Vatican</option>";
echo "<option value=\"Europe/Vienna\">Europe/Vienna</option>";
echo "<option value=\"Europe/Vilnius\">Europe/Vilnius</option>";
echo "<option value=\"Europe/Volgograd\">Europe/Volgograd</option>";
echo "<option value=\"Europe/Warsaw\">Europe/Warsaw</option>";
echo "<option value=\"Europe/Zagreb\">Europe/Zagreb</option>";
echo "<option value=\"Europe/Zaporozhye\">Europe/Zaporozhye</option>";
echo "<option value=\"Europe/Zurich\">Europe/Zurich</option>";
echo "</select>";
echo "<input type=\"submit\" value=\"Select\">"."<br>"."<br>";
echo "</form>";
if(isset($_POST['zones'])){
    $timeZone=$_POST["zones"];
    $zone=date_default_timezone_get($timeZone);
    date_default_timezone_set($zone);
}
else{
    date_default_timezone_set('Europe/Sofia');
}
//today date and time
$today = date("d-m-Y G:i:s");
//form for submit the time and choose which to use Current Real time or User Defined.
echo "<form method=\"get\">";
echo "<input type=\"checkbox\" value=\"Real Time\" name=\"BoxReal\">Current Real Time";
echo "<input type=\"text\" value=\"$today\" name=\"CurrentTime\">";
echo "<input type=\"submit\" value=\"Check\">"."<br>"."<br>";
echo "<input type=\"checkbox\" value=\"UserDefined Time\" name=\"BoxUser\">User Defined Time";
echo "<input type=\"text\" name=\"UserDefined\">";
echo "<input type=\"submit\" value=\"Check\">"."<br>"."<br>";
echo "</form>";
//check which time and date was selected to check.
$checkBox='';
if(isset($_GET["BoxReal"])){
    $dateString=$_GET["CurrentTime"];
    $currTime=get_date_time($dateString);
    $diffTime=calc_time($currTime);

}
if(isset($_GET["BoxUser"])){
    $dateString=$_GET["UserDefined"];
    $currTime=get_date_time($dateString);
    $diffTime=calc_time($currTime);

}
if(isset($diffTime)){
    echo "<div>";
    echo"<p>Hours until new year : $diffTime[1]</p>";
    echo"<p>Minutes until new year : $diffTime[2]</p>";
    echo"<p>Seconds until new year : $diffTime[3]</p>";
    echo"<p>Days:Hours:Minutes:Seconds $diffTime[0]:$diffTime[4]:$diffTime[5]:$diffTime[6] </p>";
    echo "</div>";
}

?>
</body>
</html>