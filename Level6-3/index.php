<?php

$fp = fopen("member.csv", "r");

while ($line = fgetcsv($fp)) {
	foreach ($line as $c => $value) {
		echo $line[$c] .  "<br>";
	}
}
fclose($fp);

?>