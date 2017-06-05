<?php
namespace app\admin\controller;
use app\common\controller\Base;
use think\Db;
use think\Request;

class Index extends Base{

    public function _initialize()
    {
//        parent::_initialize();
//        if(checkIsLogin()==false){
//            $this->redirect(url('index/login'));
//            return $this->fetch('index/login');
//        }
    }

    public function index()
    {
        $user_info=$this->getUserInfo(array('user_mobile'=>'13482185056'));
        $this->assign('user_info',$user_info);
        // 模板输出
        return $this->fetch('index');
    }
    /*
     * 登录页面
     * @date:20170516
     * */
    public function login(){
        if(request()->isAjax()){
            $request=Request::instance();
            $param_list=$request->param();
            $data=[
                'user_name'=>isset($param_list['user_name']) ? $param_list['user_name'] : 0 ,
                'user_pass'=>isset($param_list['user_pwd']) ? md5($param_list['user_pwd']) : 0
            ];
            $user_info=Db::table('admin')->where($data)->select();
            if(!empty($user_info)){
                return json(array('error'=>1,'msg'=>'登录成功！'));
            }else{
                return json(array('error'=>1,'msg'=>'用户名或密码错误'));
            }
        }

        return view();
    }

}
