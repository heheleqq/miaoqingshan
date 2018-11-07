<?php

function show($n){
    if ($n<1) {
        return -1;
    }
    if ($n==1 || $n==2) {
        return 1;
    }
    return show($n-1)+show($n-2);
}

function show1($n){
    static $a=1;$b=1;$index=2;$number;
    if ($n<1) {
        return -1;
    }
    if ($n==1 || $n==2) {
        return 1;
    }
    while ($n>$index) {
        $number=$a+$b;
        $a=$b;
        $b=$number;
        $index++;
    }
    return $b;
}
print_r(show(10))."..";
print_r(show1(6));
//递归效率 比非递归效率更高