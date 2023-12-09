<?php 
namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

final class Comment extends Model{
    protected $table = 'comment';
    protected $columns = [
        'content',
        'id_user',
        'id_product',
        'date_cmt',
    ];

    function getComment() {
        
        $sql = "SELECT
        c.id , c.content content,u.username username,p.id id_product, c.date_cmt date_cmt
        FROM comment c
        LEFT JOIN users u 
        ON c.id_user = u.id
        LEFT JOIN products p 
        ON c.id_product = p.id 
        "; 
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
    function getComments($idsp) {
        $sql = "SELECT
        c.id , c.content content,u.username username,c.id_product id_product, c.date_cmt date_cmt
        FROM comment c
        LEFT JOIN users u 
        ON c.id_user = u.id
        LEFT JOIN products p 
        ON c.id_product = p.id 
        WHERE p.id = $idsp";
        $stmt = $this->conn->prepare($sql);

       

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
    
}
