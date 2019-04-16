<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\model\User;

class Index extends Controller
{
    public function index()
    {
        return 'index/index';
    }

    //1、全局配置 config/database.php配置
    public function dbFind1()
    {
        $data = Db::table('user')->select();  //含前缀
        //echo json_encode($data);
        return json($data);
    }

    /**
     * 查询数据 2
     */
    public function dbFind2()
    {
        $data = Db::name('user')->select();
        echo json_encode($data);
    }

    /**
     * 条件查询 3
     */
    public function dbFind3()
    {
        $User = new User(); // 实例化User对象
//        $User->where('age=23 AND name="dhr"')->select();
//        echo json_encode($User);
        $User->setName("dddd");
        echo json_encode($User);
    }


    /**
     *添加一条数据 1
     */
    public function dbInsert1()
    {
        $data = [
            'name' => '张三',
            'age' => '20',
        ];
        $res = Db::name('user')->insert($data);
        echo $res;
    }

    /**
     *更新一条数据 1
     */
    public function dbUpdate1()
    {
        $res = Db::name('user')->where('id', 1)->update(['name' => '李d']);
        echo $res;
    }

    /**
     *更新一条数据 2
     */
    public function dbUpdate2()
    {
        $where[] = ['id', '>', 2];
        $res = Db::name('user')->where($where)->update(['name' => '李四']);
        echo $res;
    }

    /**
     *更新一条数据 3
     */
    public function dbUpdate3()
    {

    }
}
