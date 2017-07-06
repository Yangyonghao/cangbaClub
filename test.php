<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2017/6/26
 * Time: 11:04
 */
$count = 5;
function get_count(){
    static $count = 0;
    return $count++;
}
echo $count;  //5 8
++$count;
echo get_count();  //010
echo get_count();  //111
