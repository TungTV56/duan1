<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Category extends Model {
    protected $table = 'categories';
    protected $columns = [
        'name',
    ];
    
    function loadall_thongke(){
        $stmt = "SELECT categories.name as tendm, categories.id as madm, count(products.id) as countsp, min(products.price) as minprice, max(products.price) as maxprice, avg(products.price) as avgprice";
        $stmt.=" FROM products left join categories on categories.id = products.id_category";
        $stmt.=" group by categories.id order by categories.id desc";
        
        $stmt = $this->conn->prepare($stmt);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}