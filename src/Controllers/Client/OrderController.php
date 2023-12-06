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
            if (isset($_SESSION['user'])) {
                $id_user = $_SESSION['user']['id'];
            } else {
                $id_user = 0;
            }
            $id_order = "M-".rand(0,999);
            $data = [
                'id_order'=> $id_order,
                'total_order' => $_POST['total_order'],
                'pay' => $_POST['pttt'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'order_date'=> date('Y-m-d', time()),
                'status'=> 0,
                'id_user'=> $id_user,
            ];

            $order_id = (new Order)->insert($data);

            $_SESSION['iddh'] = $order_id;
            if (isset($_SESSION['cart']) && $_SESSION['cart'] > 0) {
                foreach ($_SESSION['cart'] as $item) {
                    $data = [
                        'id_product'=> $item['id'],
                        'id_order'=> $order_id,
                        'quantity'=> $item['quantity'],
                        'total_order'=> $item['price'],
                        'name_pro'=> $item['name'],
                        'image'=> $item['image'],
                    ];

                    (new OrderDetail())->insert($data);
                }
                unset($_SESSION['cart']);
                unset($_SESSION['stt']);
            }
            
            header('location: client/showorder');
        }
    }
}