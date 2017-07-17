<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2017/7/17
 * Time: 10:38
 */

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Login extends Controller
{
    /**
     * 登录页面
     * @return
     */
    public function index()
    {
        return $this->fetch('login');
    }
    /*
     * @author:yangyonghao
     * @date:20170717
     * */
    public function doLogin(){
        $request=Request::instance()->param();
         try{
             $data=[
                 'user_name'=>$request['userName'],
                 'user_pass'=>md5($request['pwd'])
             ];
             $user_info=Db::name('admin')->where($data)->find();
             if(isset($user_info)){
                 session('u_id',$user_info['id']);
                 return json_encode(array('error_id'=>0,'msg'=>'login success'));
             }else{
                 return json_encode(array('error_id'=>-1,'msg'=>'login failed'));
             }
         }catch (Exception $e){
             return json_encode(array('error_id'=>-1,'msg'=>$e->getMessage()));
         }

    }
}