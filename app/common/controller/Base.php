<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2017/5/16
 * Time: 15:28
 */
namespace app\common\controller;
use think\Controller;
use think\Db;


class Base extends Controller{

    public function _initialize()
    {
        parent::_initialize();
        self::getAdminInfo();
        if(checkIsLogin()==false){
            $this->redirect(url('Login/index'));
            return;
        }
    }
    public function getUserInfo($data){
        $user_info=Db::table('user')->where($data)->find();
        return $user_info;
    }

//    public function getMenuList(){
//        $user_info=self::getUserInfo(array('user_id'=>2));


//        $avs = '[{
//            "title": "系统设置",
//	        "icon": "fa-cubes",
//	        "spread": true,
//	        "children": [{
//                "title": "用户管理",
//		        "icon": "&#xe641;",
//		        "href": "/admin/user/index.html"
//	        }, {
//                "title": "角色管理",
//		        "icon": "&#xe63c;",
//		        "href": "/admin/role/roleList.html"
//	        }, {
//                "title": "权限管理",
//		        "icon": "&#xe63c;",
//		        "href": "/admin/role/permission.html"
//                }, {
//                            "title": "导航",
//                    "icon": "&#xe609;",
//                    "href": "nav.html"
//                }, {
//                            "title": "辅助性元素",
//                    "icon": "&#xe60c;",
//                    "href": "auxiliar.html"
//                }]
//            }, {
//                    "title": "组件",
//                    "icon": "fa-cogs",
//                    "spread": false,
//                    "children": [{
//                    "title": "BTable",
//                    "icon": "fa-table",
//		            "href": "btable.html"
//	        }, {
//                    "title": "Navbar组件",
//		            "icon": "fa-navicon",
//		            "href": "navbar.html"
//            }, {
//                    "title": "Tab组件",
//                    "icon": "&#xe62a;",
//                    "href": "tab.html"
//            }, {
//                    "title": "Laytpl+Laypage",
//                "icon": "&#xe628;",
//                "href": "paging.html"
//            }]
//            }, {
//                        "title": "第三方组件",
//                "icon": "&#x1002;",
//                "spread": false,
//                "children": [{
//                            "title": "iCheck组件",
//                    "icon": "fa-check-square-o",
//                    "href": "icheck.html"
//                }]
//            }
//        }]';
//    }
//
    public function getAdminInfo(){
        $user_id=9;
        $group_rules=Db::table('cang_admin')
            ->alias('ca')
            ->join('cang_auth_group_access w','ca.id = w.uid')
            ->join('cang_auth_group cag','w.group_id = cag.id')
            ->field('ca.id,w.group_id,cag.rules')->where(['ca.id'=>$user_id])->find();
        $explode=explode(',',$group_rules['rules']);
        foreach($explode as $value){
            $arr[]=Db::name('auth_rule')->where(['id'=>$value])->find();
        }
        $ss=self::make_tree1($arr);
//        var_dump($ss);die;
        echo json_encode($ss); die;

    }
    function make_tree1($list,$pk='id',$pid='pid',$child='_child',$root=0){
        $tree=array();
        foreach($list as $key=> $val){

            if($val[$pid]==$root){
                //获取当前$pid所有子类
                unset($list[$key]);
                if(! empty($list)){
                    $child=$this->make_tree1($list,$pk,$pid,$child,$val[$pk]);
                    if(!empty($child)){
                        $val['_child']=$child;
                    }
                }
                $tree[]=$val;
            }
        }
        return $tree;
    }

    public function getMenuList(){
        Db::name('admin')->where(['id'=>session('admin_u_id')])->find();
    }


}