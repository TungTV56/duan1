<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class  ProDetailController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $products = (new Product())->getLatestLimit10();
        if ($_GET['idsp'] && $_GET['idsp'] > 0) {
            $idsp = $_GET['idsp'];
            $proDetail = (new Product())->findOne($idsp);
            $spCungloai = (new Product())->getSpCungloai($idsp, $proDetail['id_category']);
        }

        $this->render(
            'product-detail',
            [
                'proDetail' => $proDetail,
                'products' => $products,
                'spCungloai' => $spCungloai,
            ],
        );
    }
}
