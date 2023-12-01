<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Order extends Model {
    protected $table = 'orders';
    protected $columns = [
        'id_order',
        'total_order',
        'pay',
        'username',
        'email',
        'phone',
        'address',
    ];

    function getCart() {
        $sql = "SELECT
        o.id_order masp, c.name_pro tensp, c.total_order giasp, c.quantity soluong, o.total_order tongsl, c.image img, o.username username, o.email email, o.phone phone, o.address, o.pay pttt
        FROM orders o
        JOIN order_details c
        ON o.id = c.id_order";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    
}