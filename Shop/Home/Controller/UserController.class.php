<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function index()
    {
        echo "用户首页";
    }
    public function login()
    {
        $this->show('用户登录页');
    }
    public function register()
    {
        $this->show('用户注册页');
    }
}
