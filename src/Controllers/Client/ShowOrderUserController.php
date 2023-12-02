<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;
use Ductong\BaseMvc\Models\OrderDetail;

class  ShowOrderUserController extends Controller
{
    public function showOrderUser() {
        $order = (new Order())->findOne($_SESSION['iddh']);
        $orderDetails = (new OrderDetail())->showCart($_SESSION['iddh']);

        $this->render('showorder',
            [
                'order' => $order,
                'orderDetails'=> $orderDetails,
            ]
        );
    }
}
