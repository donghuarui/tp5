<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2019-03-08
 * Time: 17:45
 */

namespace app\admin\model;


use think\Model;

class User extends Model
{
    protected $pk = 'uid';

    protected $id;

    protected $name;

    protected $age;

    // 模型初始化
    protected static function init()
    {
        //TODO:初始化内容
    }
}