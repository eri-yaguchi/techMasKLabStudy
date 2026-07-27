<?php
$score =[10, 20, 45, 60, 75, 89];

foreach ($score as $ship){
 if($ship >=50 ){
	print $ship."は50以上です。<br>";
 }else{
print $ship."は49以下です。<br>";
}
}
?>