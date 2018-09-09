<?php

namespace app\admin\controller\member;

use think\Controller;
use think\facade\Config;
use think\Db;

class Add extends Controller
{
    public function index()
    {
        $warnings = array("test1..................","test2-----------------","test31!!!!!!!!!!1!!!");
        $this->assign('warnings', $warnings);

        return $this->fetch();
    }
}
