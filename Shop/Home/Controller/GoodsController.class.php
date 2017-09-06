<?php
namespace Home\Controller;

use Think\Controller;

class GoodsController extends Controller
{
    public function showList()
    {
        echo "商品列表页";
    }
    public function detail()
    {
        echo "商品详情";
    }
}
