<?php
header("content-type:text/html;charset=utf-8");
//开启调试模式
define('APP_DEBUG', true);
//静资资源路径常量
define('CSS_URL', '/Shop/Home/Public/css/');
define('IMG_URL', '/Shop/Home/Public/images/');
define('JS_URL', '/Shop/Home/Public/js/');
//加载入口文件
require '../ThinkPHP/ThinkPHP.php';
