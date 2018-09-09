<?php

namespace app\admin\controller\member;

use think\Controller;
use think\facade\Config;
use think\Db;

class Information extends Controller
{
    public function index()
    {
        $warnings = array("test1..................","test2-----------------","test31!!!!!!!!!!1!!!");
        $this->assign('warnings', $warnings);
        $this->assign(['username'=>'侯木婕','position'=>'店长']);

        $disc = Db::name('cm_disc_info')->select();
        $this->assign('disc', $disc);
        return $this->fetch();
    }
}
