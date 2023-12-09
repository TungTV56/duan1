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

    function getComment($id_product) {
        if($id_product > 0){
        $sql = "SELECT
        c.id , c.content content,u.username username,p.id id_pro, c.date_cmt ngaybinhluan
        FROM comment c
        JOIN users u 
        ON c.id_user = u.id
        JOIN products p 
        ON c.id_product = p.id 
        WHERE p.id = $id_product";
        }
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
    
}
