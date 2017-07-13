<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }

    public function xys(){
        return view();
    }
    public function login(){
        return view();
    }
}
