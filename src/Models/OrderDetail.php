<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class OrderDetail extends Model {
    protected $table = 'order_details';
    protected $columns = [
        'id_product',
        'id_order',
        'quantity',
        'total_order',
        'name_pro',
        'image',
    ];

    function showCart($iddh) {
        $sql = "SELECT * from order_details where id_order = :iddh";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':iddh', $iddh);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}