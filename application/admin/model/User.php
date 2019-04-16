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
    protected $id;

    protected $name;

    protected $age;

    /**
     * User constructor.
     * @param $id
     * @param $name
     * @param $age
     */
    public function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    // 模型初始化
    protected static function init()
    {
        //TODO:初始化内容
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}