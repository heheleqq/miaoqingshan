<?php
$n=13;

function calFn($n){
    if ($n==0){
        return 0;
    }
    if ($n==1){
        return 1;
    }
    $str=implode(range(1,$n));
    $arr=str_split($str);
    return array_count_values($arr)[1];
}
print_r(calFn($n));
