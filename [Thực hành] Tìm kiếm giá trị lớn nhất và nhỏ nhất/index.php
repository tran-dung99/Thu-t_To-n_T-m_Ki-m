<?php
$num = [-2, 0, 5, 7, 9, -5, 30, 100];
function findMin($arr) {
    $min = $arr[0];
    for($i = 1; $i < count($arr); $i++) {
        if($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min ;
}
function findMax($arr) {
    $max = $arr[0];
    for($i = 1; $i < count($arr); $i++) {
        if($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max ;
}
echo findMin($num);
echo findMax($num);
