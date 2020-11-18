<?php

//1
$name = "安河内真平";
if ($name == "安河内真平"){
    echo "私は" . $name . "です" . "\n";
    }else {
    echo $name . "ではありません" . "\n";
    }

//2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total . "\n";

//3
$flruits = ["greap", "orange", "meron", "watermeron", "blueberry"];
foreach ($flruits as $flruit){
    echo $flruit;
    echo "\n";
}

//4
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i . "\n";
  }
}
        
        
