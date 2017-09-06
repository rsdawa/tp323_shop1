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
        $this->display();
    }
    public function register()
    {
        $this->display();
    }
}
