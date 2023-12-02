<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;

class ViewCartAdminController extends Controller
{
    public function index() {      
        $carts = (new Order)->getCart();  

        $this->renderAdmin("carts/index", ['carts' => $carts]);
    }
}