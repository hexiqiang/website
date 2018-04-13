<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12 0012
 * Time: 上午 11:40
 */

namespace app\admin\controller;
/**
 * Class Link
 * @author 小鱼
 * @package app\admin\controller
 * @function index-> 展示数据
 * @function create-> 添加数据
 * @function add-> 插入数据
 * @function edit-> 修改数据
 * @function update-> 更新数据
 * @function del-> 删除数据
 */

class Link extends Common
{
    public function index(){
        return view('link/list');
    }

    public function create(){

        return view('link/add');
    }

    public function add(){


    }

    public function edit(){

        return view('link/edit');
    }

    public function update(){


    }

    public function del(){

    }
}