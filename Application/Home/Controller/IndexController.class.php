<?php
namespace Home\Controller;
use Home\Model\UserModel;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
//        $v=D('User');

        $v= M('user')->select();
        $a=array();
        foreach ($v as $k=>$v){
            $a[]=$v['real_name'];
        }

        echo '1111111111';
        echo '333333333333';
        echo '1111';
//        var_dump($v);die;
        $this->display();
    }

    public function getTest(){
        if($_POST){
            $data=array(
                'old' =>I('post.old'),
                'edu' =>I('post.edu'),
                'work' =>I('post.work'),
                'income' =>I('post.income'),
                'finance_proportion' =>I('post.finance_proportion'),
                'finance_state' =>I('post.finance_state'),
                'invest_amount' =>I('post.invest_amount'),
                'add_time'=>date("Y-m-d H:i:s")
            );
            $aa=array_sum($_POST);
            $data['total_score']=$aa;
            $ok=M('test')->add($data);
            if($ok){
                $this->success('提交成功','/Home/Index/getTest');
            }else{
                $this->error('提交失败','/Home/Index/getTest');
            }
        }
        $this->display();
    }
}