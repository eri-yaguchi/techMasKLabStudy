<?php

function singleNumberSorted($nums)
{
    $counts = array_count_values($nums);
    $result = [];
    foreach ($counts as $key => $count) {
        if ($count === 2) {
            $result[] = $key;
        }
    }
    sort($result);
    return $result;
}
$array = [1, 2, 3, 1, 4, 4, 6, 5, 5, 5, 5];
$result = singleNumberSorted($array);

foreach ($result as $value) {
    echo $value . PHP_EOL;
}