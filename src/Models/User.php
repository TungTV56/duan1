<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'username',
        'email',
        'address',
        'password',
        'phone',
    ];
    public function getUserByEmailPassword($username, $password)
    {
        $sql = "
            SELECT 
                * 
            FROM {$this->table} 
            WHERE 
                username = :username 
                AND 
                password = :password 
            LIMIT 1
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }
    function checkemail($email){
        $sql= "select * from users where email = :email";

        $stmt = $this->conn->prepare($sql);  

        $stmt->bindParam(':email', $email);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);   

        return $stmt->fetch();
    }
}