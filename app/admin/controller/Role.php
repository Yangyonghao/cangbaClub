<?php
namespace app\admin\controller;
use app\common\controller\Base;
use think\Request;
use think\Db;

class Role extends Base{

    public function roleList(){
        return $this->fetch('roleList');
    }

    /*
     * 登录页面
     * @date:20170516
     * */
    public function login(){
        return view();
    }

    public function index()
    {
        return $this->fetch();
    }



    public function test()
    {
        return view();
    }

    /**
     * 清除缓存
     */
    public function clear() {
        if (delete_dir_file(CACHE_PATH) || delete_dir_file(TEMP_PATH)) {
            return json(['code' => 1, 'msg' => '清除缓存成功']);
        } else {
            return json(['code' => 0, 'msg' => '清除缓存失败']);
        }
    }
}
