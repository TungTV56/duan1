<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;

class ProductController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách
    */
    public function index() {
        $products = (new Product)->all();
        
        $this->renderAdmin('products/index', ['products' => $products]);
    }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $image = $_FILES['image']['name'];
            $targetDir = "upload/";
            $targetFile = $targetDir . basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
            
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'image' => $image,
                'id_category' => $_POST['id_category'],
                'description' => $_POST['description'],
            ];

            (new Product)->insert($data);

            header('Location: /admin/products');
        }
        
        $categories = (new Category)->all();
        
        $this->renderAdmin('products/create', ['categories' => $categories]);
    }

    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $image = $_FILES['image']['name'];
            $targetDir = "upload/";
            $targetFile = $targetDir . basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
            
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'image' => $image,
                'id_category' => $_POST['id_category'],
                'description' => $_POST['description'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new Product)->update($data, $conditions);
        }

        $products = (new Product)->findOne($_GET['id']);

        
        $categories = (new Category)->all();

        $this->renderAdmin('Products/update', ['products' => $products, 'categories'=> $categories]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new Product)->delete($conditions);

        header('Location: /admin/products');
    }
}
?>