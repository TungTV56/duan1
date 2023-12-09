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
        'order_date',
        'status',
        'id_user',
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

    function getAllOrder($iduser) {
        $sql = "SELECT * from orders where 1";
        
        if ($iduser > 0) {
            $sql .=" AND id_user = $iduser";
        }

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    function getOrder_iddh($iddh) {
        $sql = "SELECT * from orders where id = $iddh";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }

    function getAllOrder_count($idorder) {
        $sql = "SELECT * from order_details where id_order = :idorder";

        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindParam(':idorder', $idorder);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return sizeof($stmt->fetchAll());
    }    

    function updateCart($idorder, $status) {
        $sql = "UPDATE orders set status = $status where id = $idorder";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();
    }
}