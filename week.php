<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/2/18
 * Time: 8:43
 */
// 回文
function hw($str)
{
    $rev = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $rev .= $str[$i];
    }
    echo $rev;
    die;
}
//hw('123');
// N阶乘
function jc($n){
    $sum = $n;
    for ($i=1;$i<$n;$i++){
        $sum*=($n-$i);
    }
    return $sum;
}
print_r(jc(3));