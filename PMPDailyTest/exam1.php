<?php
$string="Have yyyou ever gone shopping and";
function number($string){
    $len=strlen($string);
    $arr=[];
    for ($i=0; $i < $len ; $i++) {
        if (isset($arr[$string[$i]])) {
            $arr[$string[$i]]++;
        }else{
            $arr[$string[$i]]=1;
        }
        if ($arr[$string[$i]]>=3) {
            return $string[$i];
        }
    }
    return "没有3个相同的字符";
}
print_r(number($string));

// $a=10;
// $b=20;
// list($a,$b)=array($b,$a);
// echo "a=".$a,"b=".$b;
