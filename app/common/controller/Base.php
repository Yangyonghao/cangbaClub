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

    public function _initialize()
    {
//        if(!session('uid')||!session('username')){
//            $this->redirect('/admin/index/login');
//        }
    }
    protected $user_table='';
    public function getUserInfo(){
        $user_info=Db::name('admin')->find();
        return $user_info;
    }


}