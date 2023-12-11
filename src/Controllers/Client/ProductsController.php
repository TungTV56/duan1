<?php 

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;

class ProductsController extends Controller {

    /* Lấy danh sách */
    public function index() {
        if(isset($_POST['btn-submit'])&&($_POST['btn-submit'])){
            $iddm = $_POST['iddm'];
        }
        if (isset($iddm)) {
            $products = (new Product())->getAllsp($iddm);
        } else {
            $products = (new Product())->getAllsp(0);
        }
        $categories = (new Category())->all();
        
        $this->render("products", 
            [
                "products" => $products,    
                "categories" => $categories,
            ]
        );
    }


}