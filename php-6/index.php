<?php

$d=date("Y-m-d H:i:s");
printf("現在、%s<br>",$d);
 
$yesterday=date("Y年m月d日",strtotime("-1 day"));
$tomorrow=date("Y年m月d日",strtotime("1 day"));
$nextweek=date("Y年m月d日",strtotime("1 week"));
 
printf( "昨日は%sです。<br>", $yesterday);
printf( "明日は%sです。<br>", $tomorrow);
printf( "来週は%sです。<br>", $nextweek);
 

$anyday = "2026-08-09";
$anyday_aftermonth = date("Y-m-d", strtotime("+3 month", strtotime($anyday)));

printf("%sの3ヶ月後は、%sです。<br>", $anyday, $anyday_aftermonth);

$days = (strtotime($anyday_aftermonth)-strtotime($anyday)) / (60 * 60 * 24);

printf("%sの3ヶ月後は、%d日後です。", $anyday, $days);
?>