<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;
use Ductong\BaseMvc\Models\OrderDetail;

class ViewCartAdminController extends Controller
{
    public function index() {      
        $listOrder = (new Order)->getAllOrder(0);  

        foreach ($listOrder as $order) {
            $countOrder[] = (new Order())->getAllOrder_count($order['id']);
        }

        $this->renderAdmin("carts/index", ['listOrder' => $listOrder, 'countOrder'=> $countOrder]);
    }
    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $status = $_POST['status'];
            $idorder = $_GET['id'];

            (new Order)->updateCart($idorder, $status);
        }
        
        $order = (new Order())->findOne($_GET["id"]);

        $this->renderAdmin('carts/update', ['order' => $order]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Order())->delete($conditions);

        $deleteIDorder = [
            ['id_order', '=', $_GET['id']],
        ];

        (new OrderDetail())->delete($deleteIDorder);

        header('Location: /admin/carts');
    }
}