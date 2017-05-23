<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2016/8/22
 * Time: 14:21
 */

namespace Home\Controller;


use Think\Controller;

class SubmitController extends Controller {

    /*
     * date:2016-8-22
     * author:yangyh
     * 登录
     * **/
    public function login(){
        if(IS_AJAX){

        }else{
            $this->display();
        }
    }
    /*
     * date:2016-8-22
     * author:yangyh
     * 注册
     * **/
    public function register(){
        if($_POST){
             $phone=I('post.phone');
            $pwd= I('post.pwd');
            $re_pwd=I('post.re_pwd');

            if(empty($phone)){
                $this->ajaxReturn(['status'=>101,'msg'=>'手机号不为空!']);
            }
            if(empty($pwd)){
                $this->ajaxReturn(['status'=>101,'msg'=>'密码不为空!']);
            }
            if(strlen($pwd)<6 || strlen($pwd)>20){
                $this->ajaxReturn(['status'=>101,'msg'=>'密码长度在6~20位!']);
            }
            if(empty($re_pwd)){
                $this->ajaxReturn(['status'=>101,'msg'=>'确认密码不为空!']);
            }
            if($pwd!=$re_pwd){
                $this->ajaxReturn(['status'=>101,'msg'=>'两次输入的密码不一致!']);
            }
            $state_msg=$this->check_phone($phone,$pwd);
            if($state_msg==false){
                $this->ajaxReturn(['status'=>101,'msg'=>'该手机号已被占用!']);
            }else{
                $data=[
                    'status'=>1,
                    'phone'=>$phone,
                    'pwd'=>md5($pwd),
                    'add_time'=>$this->getSeverTime(),
                    'login_times'=>1
                ];
                $msg=M('user')->add($data);
                if($msg){
                    $this->ajaxReturn(['status'=>100,'msg'=>'注册成功!']);
                }else{
                    $this->ajaxReturn(['status'=>101,'msg'=>'注册失败!']);
                }
            }

        }else{
            $this->display();
        }
    }

    //查看用户名是否被占用
    private function check_phone($phone,$pwd){
        $condition=[
            'phone'=>$phone,
            'pwd'=>md5($pwd),
            'status'=>1
        ];

        $user=M('user')->where($condition)->find();

        if($user==null){
            return true;
        }else{
            return false;
        }

    }
    //获取当前时间
    private function getSeverTime(){
        return date("Y-m-d H:i:s");
    }


}