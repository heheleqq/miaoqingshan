<?php
function CountSteps($x,$y){
    if ($x==0&&$y==0) {
        return 0;
    }else if($x==0||$y==0){
        return 1;
    }
    return CountSteps($x,$y-1)+CountSteps($x-1,+$y);
}
echo CountSteps(3,2);
