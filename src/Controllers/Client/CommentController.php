<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Product;



class  CommentController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function comment()
    {
        if ($_GET['idsp'] && $_GET['idsp'] > 0) {
            $idsp = $_GET['idsp'];
            $product = (new Product())->findOne($idsp);
            $comment = (new Comment)->getComments($idsp);
        }
        $this->renderComment("comment", [
            "product" => $product,
            'comment' => $comment
        ]);
    }

    

    public function create()
    {

        if (isset($_POST['btn-submit'])) {
            $idsp = $_POST['idsp'];
            $data = [
                'content' => $_POST['content'],
                'id_user' => $_SESSION['user']['id'],
                'id_product' => $idsp,
                'date_cmt' => date('Y-m-d', time()),
            ];
            (new Comment)->insert($data);
            // header('location: /client/comment');
            $this->renderComment("comment");

        }
    }
}
