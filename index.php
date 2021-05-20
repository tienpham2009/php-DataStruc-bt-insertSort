<?php
$array =  [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];

for ($i = 0 ; $i < count($array) ; $i++){
    $value = $array[$i];
    $j = $i - 1;
    while ($j >= 0 && $array[$j] > $value){
        $array[$j + 1] = $array[$j];
        $j--;
    }
    $array[$j + 1] = $value;
}
