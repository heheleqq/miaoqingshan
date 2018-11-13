<?php
function Sum_Solution($str){
     $ans = $str;
        $ans && ($ans += Sum_Solution($str - 1));
        return $ans;
}
$str=5;
print_r(Sum_Solution($str));