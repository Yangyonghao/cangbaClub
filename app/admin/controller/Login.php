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
                 'username'=>$request['userName'],
                 'password'=>md5($request['pwd'])
             ];
             $result=$this->validate($data, 'AdminValidate');
             if(true !==$result){
                 return json(['error_id'=>-1,'msg'=>$result]);
             }
             $user_info=Db::name('admin')->where($data)->find();
             if(isset($user_info)){
                 session('admin_u_id',$user_info['id']);
                 return json(['error_id'=>0,'msg'=>'login success']);
             }else{
                 return json(['error_id'=>-1,'msg'=>'login failed']);
             }
         }catch (Exception $e){
             return json(['error_id'=>-1,'msg'=>$e->getMessage()]);
         }

    }
    /*
     * 退出
     * */
    public function loginOut(){
        session(null);
        cache('db_config_data',null);//清除缓存中网站配置信息
        $this->redirect(url('index'));
    }
}