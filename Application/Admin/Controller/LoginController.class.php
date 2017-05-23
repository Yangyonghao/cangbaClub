<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2016/8/18
 * Time: 17:44
 */

namespace Admin\Controller;


use Think\Controller;

class LoginController extends Controller{

    //登录页面
    public function login(){
        if(IS_AJAX){
            $user_name=I('post.name');
            $pwd=I('post.pwd');

            if(empty($user_name) || !isset($user_name)){
                $this->ajaxReturn(array('status'=>101,'msg'=>'用户名不为空!'));
            }
            if(empty($pwd) || !isset($pwd)){
                $this->ajaxReturn(array('status'=>101,'msg'=>'密码不为空!'));
            }
            $msg=self::check_name($user_name,$pwd);
            if($msg===false){
                $this->ajaxReturn(array('status'=>101,'msg'=>'用户或密码错误!'));
            }else{
                session('u_msg',$msg);
                $this->ajaxReturn(array('status'=>100,'msg'=>'登陆成功!'));
            }

        }else{
            $this->display();
        }
    }


    //检查用户是否正确
    private function check_name($name,$pwd){
        $data=[
            'user_name'=>$name,
            'password'=>md5($pwd)
        ];
        $user_name=M('admin')->where($data)->find();
        if($user_name){
            return $user_name;
        }else{
            return false;
        }
    }


}