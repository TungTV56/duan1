<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;

class StatisticalController extends Controller
{
    public function __construct() {
        check_auth();
    }
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {        
        $thongkes = (new Category)->loadall_thongke();

        $this->renderAdmin("statisticals/index" , ['statisticals' => $thongkes]);
    }
}