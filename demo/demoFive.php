<!-- 1 -->
<?php
$ip = "192.168.1.1";
$ip_n = bindec(decbin(ip2long($ip)));
echo $ip_n."</br>";
?>
 <!-- 2 -->
 <?php
    $number=1;
    $a=10;
    function index($number,$a){
        if ($a==1) {
            return $number;
        }
        else{
            $number=$number+1;
            $number=($number*2);
            $a--;
            return index($number,$a);
        }
    }
    print_r(index($number,$a));
    function index1($number,$a){
        while ($a>1) {
            $number=$number+1;
            $number=($number*2);
            $a--;
        }
        return $number;
    }
    print_r(index1($number,$a));
 ?>
 <!-- 3 -->
<?php
$n=434;
$b=10;
$c=1;
while($n%$b){
    if ($n%$b==434) {
        echo "</br>".$c;
        break;
    }else{
        $b=$b*10;
        $c++;
    }
}

?>

<?php

class Car
{
    public $name;
    public $weight;
}
interface Engine
{
    public function drive();
}


class Jeep extends Car implements Engine{
      public function drive(){echo "drive";}
};

$c=new Jeep();
$c->name="奥迪";
$c->weight=3253;

$a=new Jeep;
$a->name="奔驰";
$a->weight=983;

$r=new Jeep;
$r->name="QQ";
$r->weight=893;
$arr=array($c->weight=>$c->name,$a->weight=>$a->name,$r->weight=>$r->name);
print_r("<br>".max($arr));
?>
