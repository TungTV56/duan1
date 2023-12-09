<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;

class CommentsController extends Controller
{
    public function index() {      
        $comment = (new Comment)->getComment();  

        $this->renderAdmin("comment/index", ['comment' => $comment]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Comment())->delete($conditions);

        header('Location: /admin/comment');
    }
}