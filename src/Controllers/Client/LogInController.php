<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class  LogInController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $this->render('login');
    }

    public function logOut() {
        unset($_SESSION['user']);
        header('location: /');
    }
    public function handleLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = (new User())->getUserByEmailPassword($username, $password);
        
        if ($user != false) {
            $_SESSION['user'] = $user;

            if ($user['role']) {
                header('Location: /admin/dashboard');
                exit();
            }

            header('Location: /');
            exit();
        } else {
            $validate = ['error' => 'Tên đăng nhập hoặc mật khẩu sai!'];
            $this->render('login', $validate);
        }
    }
}
