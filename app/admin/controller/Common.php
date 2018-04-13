<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12 0012
 * Time: 上午 9:38
 */

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\View;
class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $logintime = time();
        $this -> assign('logintime',$logintime);
    }
}