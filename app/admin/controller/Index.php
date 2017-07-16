<?php
namespace app\admin\controller;
use app\common\controller\Base;
use think\Request;

class Index extends Base{

    public function _initialize()
    {
        parent::_initialize();
//        if(checkIsLogin()==false){
//            $this->redirect('/admin/index/login');return;
//            return $this->fetch('/admin/index/login');
//        }
    }

    /*
     * 登录页面
     * @date:20170516
     * */
    public function login(){
        return $this->fetch('login');
    }


    /*
     * 执行登录操作
     * @date:20170518
     * */
    public function act_login(){
        $aaa=Request::instance()->param();
        $data=[
            'user_name'=>$aaa['user_name'],
            'user_pass'=>md5($aaa['user_pwd'])
        ];

    }

    public function index()
    {
        return $this->fetch();
    }

    public function test()
    {
        return view();
    }
}
