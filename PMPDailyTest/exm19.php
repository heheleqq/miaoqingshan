<?php
// 递归
// function a($num,$arr,$i){
//     if ($i==count($arr)) {
//         echo "无";die;
//     }
//     if ($num==$arr[$i]) {
//         echo $i;
//         die;
//     }
//     return a($num,$arr,$i+1);
// }
// $num=0;
// $arr=array(1,2,3,4,5,6,7,8,9,0);
// $i=0;
// a($num,$arr,$i);
function index()
{
    $arr = array(0,1,2,3,4,5,6,7,8,9);
    $a = 5;
    $sz = sizeof($arr)/sizeof($arr[0]);//确定数组大小
    $ret = search($arr, $a, $sz);
    if ($ret == -1)
    {
        printf("找不到\n");
    }
    else
    {
        printf("找到啦，下标是%d", $ret);
    }
    return 0;
}

function search($arr, $a,$sz)//定义查找函数，把数组，要查找的数，数组大小传进函数
{
    $left = 0;
    $right = $sz - 1;
    while($left <= $right)//如果左下标小于右下边，循环继续
    {
        $mid = ($left + $right)/2;
        if ($arr[$mid] == $a)//第一次就找到
        {
            return $mid;
        }
        else if($arr[$mid] < $a)//在右半部分
        {
            $left = $mid + 1;
        }
        else//在左半部分
        {
            $right =$mid - 1;
        }
    }
    return -1;
}

