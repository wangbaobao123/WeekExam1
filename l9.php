<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/2/22
 * Time: 10:29
 */
/*
 * PrintMinNumber($numbers)  $numbers表示任意整数数组
 * */
function PrintMinNumber($numbers){
    $len = count($numbers);
    $arr = [];
    for ($i = 1;$i<=$len;$i++){
        for ($k = 0;$k<$len-$i;$k++){
            if ($arr[$k]>$arr[$k+1]){
                $arr[$k] = $arr[$k] ^ $arr[$k+1];
                $arr[$k+1] = $arr[$k] ^ $arr[$k+1];
                $arr[$k] = $arr[$k] ^ $arr[$k+1];
            }
        }
    }
    return $arr;
}
print_r(PrintMinNumber(10));