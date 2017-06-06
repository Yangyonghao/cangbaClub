<?php
namespace app\admin\controller;
use app\common\controller\Base;
use think\Db;
use think\Request;

class Index extends Base{

    public function index()
    {
//        echo request()->module();
//        echo request()->controller();
//        echo request()->action();

        $user_info=$this->getUserInfo();
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
                'username'=>isset($param_list['user_name']) ? $param_list['user_name'] : 0 ,
                'password'=>isset($param_list['user_pwd']) ? md5($param_list['user_pwd']) : 0
            ];
            $user_info=Db::name('admin')->where($data)->select();
            if(!empty($user_info)){
                return json(array('error'=>0,'msg'=>'登录成功！'));
            }else{
                return json(array('error'=>1,'msg'=>'用户名或密码错误'));
            }
        }

        return view();
    }

}
