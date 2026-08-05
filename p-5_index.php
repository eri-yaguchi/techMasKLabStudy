<?php
$person1 = ["name" => "アサヒ", "age" => 25, "hobby" => "サッカー"];
$person2 = ["name" => "ジェヒョク", "age" => 25, "hobby" => "バラエティ"];
$person3 = ["name" => "ジフン", "age" => 26, "hobby" => "筋トレ"];
$person4 = ["name" => "ヒョンソク", "age" => 27, "hobby" => "ラップ"];
$person5 = ["name" => "ジョンファン", "age" => 21, "hobby" => "ダンス"];

$people = array_merge([$person1],[$person2],[$person3],[$person4],[$person5]);

print_r($people);
$ages = array_column($people , "age") ;
array_multisort($ages, $people);

printf("名前：%s（%d歳）- 趣味：%s<br>", $people[0]["name"], $people[0]["age"], $people[0]["hobby"]);
printf("名前：%s（%d歳）- 趣味：%s<br>", $people[1]["name"], $people[1]["age"], $people[1]["hobby"]);
printf("名前：%s（%d歳）- 趣味：%s<br>", $people[2]["name"], $people[2]["age"], $people[2]["hobby"]);
printf("名前：%s（%d歳）- 趣味：%s<br>", $people[3]["name"], $people[3]["age"], $people[3]["hobby"]);
printf("名前：%s（%d歳）- 趣味：%s<br>", $people[4]["name"], $people[4]["age"], $people[4]["hobby"]);

$ages = array_column($people, "age");
$sum = array_sum($ages);
$count = count($ages);
$average = $sum / $count;

echo "平均年齢：" . $average . "歳";

?>