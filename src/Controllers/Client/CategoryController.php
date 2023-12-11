<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;

class CategoryController extends Controller {

    // public function __construct() {
    //     check_auth();
    // }

    /* Lấy danh sách */
    public function index() {
        $products = (new Product())->all();
        $categories = (new Category())->all();

        // Mảng này có cấu trúc, key là id danh mục, value là tên danh mục
        // Tạo ra mảng này để hiển thị tên danh mục sản phẩm ở danh sách
        $arrayCategoryIdName = [];
        foreach ($categories as $category) {
            $arrayCategoryIdName[$category['id']] = $category['name'];
        }

        $this->render("products", 
            [
                "products" => $products, 
                "arrayCategoryIdName" => $arrayCategoryIdName
            ]
        );
    }

    // /* Thêm mới */
    // public function create() {
    //     if (isset($_POST["btn-submit"])) { 
    //         $data = [
    //             'name' => $_POST['name'],
    //         ];

    //         (new Category())->insert($data);

    //         header('Location: /admin/categories');
    //     }

    //     $this->renderAdmin("categories/create");
    // }

    // /* Cập nhật */
    // public function update() {

    //     if (isset($_POST["btn-submit"])) { 
    //         $data = [
    //             'name' => $_POST['name'],
    //         ];

    //         $conditions = [
    //             ['id', '=', $_GET['id']],
    //         ];

    //         (new Category())->update($data, $conditions);
    //     }

    //     $category = (new Category())->findOne($_GET["id"]);

    //     $this->renderAdmin("categories/update", ["category" => $category]);
    // }

    // /* Xóa */
    // public function delete() {
    //     $conditions = [
    //         ['id', '=', $_GET['id']],
    //     ];

    //     (new Category())->delete($conditions);

    //     header('Location: /admin/categories');
    // }
}