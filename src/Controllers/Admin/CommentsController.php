<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;

class CommentsController extends Controller
{
    public function index() {      
        // $comment = (new Comment)->getComment();  

        $this->renderAdmin("comment/index", ['comment' => $comment]);
    }
}