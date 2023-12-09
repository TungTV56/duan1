<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $products = (new Product())->getLatestLimit10();
        $allproducts = (new Product())->all();

        $this->render('home', ['products'=> $products, 'allproducts' => $allproducts]);
    }
}