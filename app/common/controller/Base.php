<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2017/5/16
 * Time: 15:28
 */
namespace app\common\controller;
use think\Controller;
use think\Db;


class Base extends Controller{

    protected $user_table='';
    public function getUserInfo($data){
        $user_info=Db::table('user')->where($data)->find();
        return $user_info;
    }


}