<?php
$arr=array(7,4,9,1,8,3,7,3,2,0);
$temp=0;
$count=count($arr);
for ($i=0; $i < $count-1; $i++) {
    for ($j=0; $j < $count-1-$i; $j++) {
        if ($arr[$j]>$arr[$j+1]) {
            $temp=$arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1]=$temp;
        }
    }
}
print_r($arr);