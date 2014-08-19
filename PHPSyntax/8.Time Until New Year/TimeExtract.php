<?php

function get_date_time($var){
    if($var[11]=='0'||$var[11]=='1'||$var[11]=='2'||$var[11]=='3'||$var[11]=='4'||$var[11]=='5'||$var[11]=='6'||
        $var[11]=='7'||$var[11]=='8'||$var[11]=='9'){
    $currentDate=$var[0].$var[1];
    $currentMonth=$var[3].$var[4];
    $currentYear=$var[6].$var[7].$var[8].$var[9];
    $currentHour="0".$var[11];
    $currentMinute=$var[13].$var[14];
    $currentSecond=$var[16].$var[17];
    }
    if($var[12]!=':'){
        $currentDate=$var[0].$var[1];
        $currentMonth=$var[3].$var[4];
        $currentYear=$var[6].$var[7].$var[8].$var[9];
        $currentHour=$var[11].$var[12];
        $currentMinute=$var[14].$var[15];
        $currentSecond=$var[17].$var[18];
    }

    $arrTime=array("date"=>$currentDate,"month"=>$currentMonth,"year"=>$currentYear,"hour"=>$currentHour,
        "minute"=>$currentMinute,"second"=>$currentSecond);
    return $arrTime;
}
function calc_time($var){

    $date=$var["date"];
    $month=$var["month"];
    $year=$var["year"];
    $hour=$var["hour"];
    $minute=$var["minute"];
    $second=$var["second"];

    //create date and time of the new year and the current defined or real time.
    $newYear=DateTime::createfromformat('d-m-Y G:i:s',"31-12-$year 24:00:00");
    $currentTime=DateTIme::createfromformat('d-m-Y G:i:s',"$date-$month-$year $hour:$minute:$second");
    $interval = $newYear->diff($currentTime);
    $intMonths=$interval->format('%m');

    //convert months into days and add then into the current left days.
    $monthDays=getDaysOfMonth(12-$intMonths);
    $intDays=$interval->format('%d');
    $intHours=$interval->format('%H');
    $intMinutes=$interval->format('%I');
    $intSeconds=$interval->format('%S');
    $calcDays=$monthDays+intval($intDays);
    $calcHours=($calcDays*24)+intval($intHours);
    $calcMinutes=($calcHours*60)+intval($intMinutes);
    $calcSeconds=($calcMinutes*60)+intval($intSeconds);
    $finalTime=array($calcDays,$calcHours,$calcMinutes,$calcSeconds,$intHours,$intMinutes,$intSeconds);
    return $finalTime;
}

function getDaysOfMonth($var){

    $days=0;
    $currMonth=$var;

    for($i=$currMonth+1;$i<=12;$i++){
        if($i%2==0 && $i!=2){
            $monthDays=31;

        }
        if($i%2>0){
            $monthDays=30;

        }
        $days+=$monthDays;
    }

    return $days;
}
function is_leap_year($year)
{
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}
?>