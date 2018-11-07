<?php
$n=153;
function flower($n){
    $arr=str_split($n, 1);
    if ($n==$arr[0]*$arr[0]*$arr[0]+$arr[1]*$arr[1]*$arr[1]+$arr[2]*$arr[2]*$arr[2]) {
        echo "1";
    }else{
        echo "2";
    }
}
print_r(flower($n));