<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2017/6/5
 * Time: 16:43
 */

namespace app\admin\controller;


use app\common\controller\Base;

class Article extends Base
{
    public function index(){
        return $this->fetch('index');
    }
    public function articleList(){
        return $this->fetch('articleList');
    }
}