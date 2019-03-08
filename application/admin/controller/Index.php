<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return '<span>6666</span>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
