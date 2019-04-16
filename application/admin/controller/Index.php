<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return 'index/index';
    }
    //1、全局配置 config/database.php配置
    public function dbTest()
    {
        $data = Db::table('user')->select();
        //echo json_encode($data);
        return json($data);
    }
}
