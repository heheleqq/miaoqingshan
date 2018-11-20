<?php
/**
 * @Author: Marte
 * @Date:   2018-11-20 08:14:31
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-11-20 08:15:21
 */
function numberOf1($n)
{
    $count = 0;
    while($n){
        if($n & 1)
        $count++;
        $n = $n >> 1;
    }
    return $count;
}
echo numberOf1(10);