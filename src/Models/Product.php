<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $columns = [
        'name',
        'price',
        'image',
        'id_category',
        'description',
    ];

    public function getLatestLimit10()
    {
        $sql = "
            SELECT 
                p.id p_id,
                p.name p_name,
                p.price p_price,
                p.image p_image,
                c.id c_id,
                c.name c_name
            FROM products p 
            JOIN categories c
                ON p.id_category = c.id
            ORDER BY p.id DESC
            LIMIT 10
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    // Lấy ra tất cả sản phẩm theo ID danh mục, được order by theo ID sản phẩm
    public function getAllByCategoryID($categoryID)
{
    $sql = "
        SELECT 
            p.id AS p_id,
            p.name AS p_name,
            p.price AS p_price,
            p.image AS p_image,
            c.id AS c_id,
            c.name AS c_name
        FROM products p 
        JOIN categories c
            ON p.id_category = c.id
        WHERE p.id_category = :categoryID
        ORDER BY p.id DESC";

    $stmt = $this->conn->prepare($sql);

    $stmt->bindParam(':categoryID', $categoryID, \PDO::PARAM_INT);

    $stmt->execute();
    
    $stmt->setFetchMode(\PDO::FETCH_ASSOC);

    return $stmt->fetchAll();
}

    function getSpCungloai($id, $id_categorie)
    {
        $sql = "SELECT * from products where id_category = $id_categorie and id <> $id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    function getAllsp($iddm=0) {
        $sql = "SELECT * from products where 1";
        
        if($iddm>0){
            $sql.=" and id_category ='".$iddm."'";
        }

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}
