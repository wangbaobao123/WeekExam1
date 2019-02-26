<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/2/26
 * Time: 8:43
 */

/**
 * 编写一个程序，传入n与m两个参数，生成1~n的编号，从开头的编号开始数，数到m将对应的元素删除，接下来从下一个元素开始数，数到m就删除，求最后剩下的数字
 *
 *
 * 思路：
 *
 */
function sx($n,$m){

}

/**
 *
 * 编写一个程序，给定任意长度的数组，数组内包含n个数字，要求将数组分为三组，每组的和尽量相近：
 */

function jl($arr){
    $count = count($arr);
    for ($i = 0;$count<3;$i++){
        $array = [
            [array_shift($arr)],
            [array_shift($arr)],
            [array_shift($arr)],
        ];
    }

}

/**
 *
 *
 * 3．编写一个函数，传入一个数组，数组内包含n个正整数数字，返回数组内数字可以组成的最大值：
 */

function getMax($n){
    $arr = [];

}

/**
 *
 * 银行有四个柜台，给定两个数组包含客户到达银行的时间与办理业务所需要的时间：
 * @param $active_time客户到达的时间
 * @param $process_time 客户所需要的时间
 */
function bank($active_time,$process_time){
    // 创建窗口
    $windows = [];

}