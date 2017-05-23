<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        if(empty($_SESSION['u_msg'])){
            //param：url 参数 跳转时间 提示信息
            $this->redirect('Login/login');
        }else{

            $this->display();
        }
    }
}