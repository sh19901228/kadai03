<?php
// 課題1
$name = "shun koda";
if ($name == "shun koda") {
    echo "私は". $name. "です";
    echo "\n";
} else {
    echo "shun kodaではありません";
    echo "\n";
}

// 課題2
$sum = 0;
for ($i = 1; $i <= 10000; $i++){
    $sum += $i;
}
echo $sum;
echo "\n";

// 課題3
$fruits = array ("apple", "orange", "grape", "lemon", "banana");
foreach ($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

// 課題4
for ($i = 1; $i <= 100; $i++){
    if ($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}