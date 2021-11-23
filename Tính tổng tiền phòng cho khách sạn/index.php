<?php
$matrix = [[0, 1, 1, 2], [0, 5, 0, 0], [2, 0, 3, 3]];

function totalMoney($arr) {
    $notUse = [];
    $use = [];
for($i = 0 ; $i < count($arr); $i++ ) {
    for($j = 0; $j < count($arr[$i]) ; $j++) {
        if($arr[$i][$j] == 0) {
            array_push($notUse,$arr[$i][$j]);
        }else if( $i > 0 && $arr[$i][$j] !== 0 && $arr[$i - 1][$j] === 0 ) {
            array_push($notUse,$arr[$i][$j]);
        }else {
            array_push($use,$arr[$i][$j]);
        }
    }
}
    return total($use);

}
function total($array) {
    $sum = 0;
    for($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    return $sum;
}

echo "tổng tiền phải trả là :". totalMoney($matrix);




?>
