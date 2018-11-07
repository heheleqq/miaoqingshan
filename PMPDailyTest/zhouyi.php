<?php
// 1
$num=0;
for ($i=1; $i <= 100 ; $i++) {
    $num=$i+$num;
}
echo "for1-100是".$num;
// 2
function sum($n){
    return $n==1?1:$n+sum($n-1);
}
echo "</br>递归1-100".sum(100);
// 3
class n{
    public function a(){
        for ($i=1; $i <= 100 ; $i++) {
            $num=$i+$num;
        }
        echo "封装1-100是".$num;
    }
}
$a=new n;
?>
<!-- n的阶乘 -->
<?php
function demo($a){
    if ($a>1) {
        $r=$a*demo($a-1);
    }
    else{
        $r=$a;
    }
    return $r;
}
$a=6;
echo "</br>递归的阶乘是".demo($a);

$str=1;
for ($i=2; $i <= 6; $i++) {
    $str=$i*$str;
}
echo "</br>for阶乘是".$str;
?>
<!-- 回文字符串 -->
<?php
$str="abba";
$len=strlen($str);
$a="";
for ($i=$len; $i >= 0 ; $i--) {
    @$a.=$str[$i];
}
if ($a==$str) {
    echo "</br>相同的回文字符串";
}else{
    echo "</br>不同的回文字符串";
}
?>
<!-- s -->
<?php
//定义一个Person类，有姓名、年龄属性
class Person{
    public $name;
    public $age;
}
// 定义一个Walk接口类，有行走的方法
interface Walk{
    public function run();
}
// 定义一个Student类，继承Person类，并且继承Walk接口
class  Student extends Person implements Walk{
    public function run(){
        echo "run";
    }
}
// 实例化8个不同的Student类的对象
$a=new Student;
$a->name="a";
$a->age=3;
$b=new Student;
$b->name="b";
$b->age=2;
$c=new Student;
$c->name="c";
$c->age=9;
$d=new Student;
$d->name="d";
$d->age=7;
$e=new Student;
$e->name="e";
$e->age=1;
$f=new Student;
$f->name="f";
$f->age=5;
$g=new Student;
$g->name="g";
$g->age=4;
$h=new Student;
$h->name="h";
$h->age=8;
// 编写函数实现求最高age的对象的name的值
$max=array($a->age=>$a->name,$b->age=>$b->name,$c->age=>$c->name,$d->age=>$d->name,$e->age=>$e->name,$f->age=>$f->name,$g->age=>$g->name,$h->age=>$h->name);
krsort($max);
foreach ($max as $key => $val) {
    print_r("</br>年龄最大的是".$val);
    break;
}

