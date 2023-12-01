<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class  CartController extends Controller
{
    public function index() {
        if($_GET['idsp'] && $_GET['idsp'] > 0) {
            $idsp = $_GET['idsp'];
            $product = (new Product())->findOne($idsp);
        }

        $this->render('cart', ['product'=> $product]);
    }
}