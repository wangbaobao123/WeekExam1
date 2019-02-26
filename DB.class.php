<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2019/2/26
 * Time: 9:00
 */
class DB{
    private static $ins;
    private static $db;
    function __construct()
    {
      $db =  PDO("mysql:host=127.0.0.1;dbname=wms",'root','root');
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }

    // 创建方法
    function create(){

    }

    // 查询方法
    function select(){

    }

    // 删除方法
    function delete(){

    }
    // 修改方法
    function update(){

    }
}