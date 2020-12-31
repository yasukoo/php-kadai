<?php

//1
function double($a) {
    $result = $a * 2;
    return $result;
}

echo double(23) . "\n";

//2
function sum($a, $b){
    $result = $a + $b;
    return $result;
}

echo sum(2, 6) . "\n";

//3
$arr = [1, 3, 5, 4,];
function multiplication($arr){
    $result = 1;
    foreach($arr as $b){
        $result *= $b;
    }
    return $result;
}
echo multiplication($arr) . "\n";


//4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }   

    }
    return $max_number;
 }
 $arr = [2,5,4,8,9,1,3];
 echo max_array($arr) . "\n";
 
 
 //5
 
 $str = "aaa<br>bbb<br><hr>";
 echo strip_tags($str, '<hr>') . "\n";
 
 $sports = ["soccor", "baseball"];
 array_push($sports, "golf", "e-sports", "running");
 print_r($sports) . "\n";
 
$animal1 = [
    'cat' => '猫',
    'dog' => '犬',
    'fox' => '狐'
];
$animal2 = [
    'pig' => '豚',
    'flog' => '蛙',
    'bird' => '鳥',
    'sarmon' => '鮭'
];
$result = array_merge($animal1,$animal2);
print_r($result);
echo $result['pig'] . "  " . $result['sarmon'] . "\n";
 
$a = time();
echo date("y/m/d", $a) . "\n";

$b = mktime( 17, 36, 0, 8, 26, 2021);
echo $b . "\n";
echo date("y/m/d", $b) . "\n";