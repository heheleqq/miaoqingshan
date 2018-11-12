<?php
// 1
// $arr=[1,2,3,4];
// function num($arr){
//     //百位数字有4种选择
//     for ($i=1; $i <= count($arr); $i++) {
//         //十位数字有4种选择
//         for ($j=1; $j <= count($arr); $j++) {
//             //个位数字有4种选择
//             for ($k=1; $k <= count($arr); $k++) {
//                 //个位数字与十位或百位数字相等时跳过  遇到十位数字等于百位数字时跳过
//                 if ($i!=$j&&$i!=$k&&$j!=$k) {
//                     // 添加数组
//                     $num[]=$i.$j.$k;
//                 }
//             }
//         }
//     }
//     return $num;
// }
// // 输出
// print_r(num($arr));




// 2
// class Singleton{
//     //私有的静态属性
//     private static $_instance = null;

//     //私有的构造方法、
//     private function __construct(){
//     }
//     //私有的克隆方法
//     private function __clone(){
//     }
//     //公共的静态方法
//     public static function getInstance(){
//     }
// }

// 3
// function my_dir($dir){
//     static $data;
//     $file = scandir($dir);
//     $f=pathinfo($dir);
//     for ($i=2; $i < count($file); $i++) {
//         $d= "$dir/$file[$i]";
//         $dirInfo = pathinfo($d);
//         if (is_dir($d)) {
//             $data[$f['filename']][]=$file[$i];
//             my_dir($d);
//         }else{
//             $data[$f['filename']][]=$file[$i];
//         }
//     }
//     return $data;
// }
// $dir="d:/father/ffffff";
// print_r(my_dir($dir));



// 4
function findCommonPath($aPath,$bPath){
    static $str;
    $a=explode("/",$aPath);
    $b=explode("/",$bPath);
    for ($i=0; $i < count($a); $i++) {
        if ($a[$i]==$b[$i]) {
            $str[]=$a[$i];
        }else{
            break;
        }
    }
    print_r(implode("/",$str));
}
$aPath="/a/b/c/d/test.php";
$bPath="/a/b/d/c/test.php";
findCommonPath($aPath,$bPath);


