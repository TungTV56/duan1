<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class  CartController extends Controller
{
    public function showCart() {
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = [];
        }
        if (isset($_POST['addToCart'])) {
            $fg = 0;
            $i = 0;
            if (isset($_POST['quantity'])) {
                $quantity = $_POST['quantity'];
            } else {
                $quantity = 1;
            }
            $products = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'image' => $_POST['image'],
                'quantity' => $quantity,
            ];

            foreach ($_SESSION['cart'] as $item) {
                if ($item['name'] === $products['name']) {
                    $quantityNew = $products['quantity'] + $item['quantity'];
                    $_SESSION['cart'][$i]['quantity'] = $quantityNew;
                    $fg = 1;
                    break;
                }
                $i++;
            }
            
            if ($fg == 0) {
                $_SESSION['cart'][] = $products;
            }
        }

        $this->render('cart', ['cartPro'=> $_SESSION['cart']]);
    }

    function deleteCart() {
        if (isset($_GET['i'])) {
            array_splice($_SESSION['cart'], $_GET['i'],1);
        } else {
            unset($_SESSION['cart']);
        }

        header('Location: /client/cart');
    }
}