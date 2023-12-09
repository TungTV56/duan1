<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;
use Ductong\BaseMvc\Models\OrderDetail;

class  ShowOrderUserController extends Controller
{
    public function showOrderUser() {
        if (isset($_SESSION['iddh'])) {
            $order = (new Order())->findOne($_SESSION['iddh']);
            $orderDetails = (new OrderDetail())->showCart($_SESSION['iddh']);
    
            $this->render('showorder',
                [
                    'order' => $order,
                    'orderDetails'=> $orderDetails,
                ]
            );
            exit();
        }
        $this->render('showorder');
    }

    public function yourOrder() {
        if(isset($_SESSION['user'])) {
            $listOrder = (new Order())->getAllOrder($_SESSION['user']['id']);

            foreach ($listOrder as $order) {
                $countOrder[] = (new Order())->getAllOrder_count($order['id']);
            } 
            $this->render('yourorder', ['listOrder' => $listOrder, 'countOrder'=> $countOrder]);
            exit();
        }
        if (isset($_SESSION['iddh']) && !isset($_SESSION['user'])) {
            $listOrderIddh = (new Order())->getOrder_iddh($_SESSION['iddh']);
            
            $countOrder = (new Order())->getAllOrder_count($_SESSION['iddh']);

            $this->render('yourorder', ['listOrderIddh' => $listOrderIddh, 'countOrder'=> $countOrder]);
            exit();
        }

        $this->render('yourorder');
    }
}
