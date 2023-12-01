<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;
use Ductong\BaseMvc\Models\OrderDetail;

class OrderController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function showOrder() {

        $this->render('order');
    }

    function order() {
        if (isset($_POST['pay'])) {
            $id_order = "M-".rand(0,999);
            $data = [
                'id_order'=> $id_order,
                'total_order' => $_POST['total_order'],
                'pay' => $_POST['pttt'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
            ];
        //     // $total_order = $_POST['total_order'];
        //     // $username = $_POST['username'];
        //     // $address = $_POST['address'];
        //     // $email = $_POST['email'];
        //     // $phone = $_POST['phone'];
        //     // $pttt = $_POST['pttt'];
        //     // $madh = "M-".rand(0,999);

            (new Order)->insert($data);
            $order = (new Order)->all();
            $_SESSION['iddh'] = $order[0]['id'];
            if (isset($_SESSION['cart']) && $_SESSION['cart'] > 0) {
                foreach ($_SESSION['cart'] as $item) {
                    $data = [
                        'id_product'=> $item['id'],
                        'id_order'=> $order[0]['id'],
                        'quantity'=> $item['quantity'],
                        'total_order'=> $item['price'],
                        'name_pro'=> $item['name'],
                        'image'=> $item['image'],
                    ];

                    (new OrderDetail())->insert($data);
                }
                unset($_SESSION['cart']);
            }
            
            header('location: client/showorder');
        }
    }
}