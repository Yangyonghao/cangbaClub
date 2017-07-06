<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2017/6/26
 * Time: 10:59
 */
namespace app\index\controller;

class Abc{
    function get(){
        global $var2;
        $var1 = 0;
        return $var2++;
    }

    function testThree(){
        echo $this->get_count();
        echo $this->get();
    }

    function get_count(){
        static $count = 0;
        return $count++;
    }
}



