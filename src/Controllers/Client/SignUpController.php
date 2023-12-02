<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;
use Ductong\BaseMvc\Models\User;

class  SignUpController extends Controller
{
    /*
        Đây là hàm hiển thị Đăng Ký
    */
    public function index() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'username' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
            ];

            (new User)->insert($data);

            header('Location: /client/login');
        }       
        
        $this->render('signup');
    }

    
}