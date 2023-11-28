<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class  SignUpController extends Controller
{
    /*
        Đây là hàm hiển thị Đăng Ký
    */
    public function index() {
        $this->render('signup');
    }
}