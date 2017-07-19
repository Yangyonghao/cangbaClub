<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2017/7/18
 * Time: 11:52
 */
namespace app\admin\controller;
use app\admin\model\UserModel;
use app\common\controller\Base;
use think\Db;


class User extends Base{

    public function index(){
        $user=new UserModel();
//        $user_list=$user->getAllUsers(array());
//        dump($user_list);die;

        $result=Db::name('admin')->select();
        dump($result);die;
        $this->assign('result',$result);
        return $this->fetch('index');
    }
}