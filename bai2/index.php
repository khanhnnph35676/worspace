<?php
session_start();
include 'env.php';
include 'db.php';
include 'ShoppingCart.php';
include 'header.php';

use App\ShopingCart;

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
    $_SESSION['count_cart'] = 0;
}
if (isset($_GET['url'])) {
    $obj = new ShopingCart();
    $url = $_GET['url'];
    switch ($url) {
        case 'list':
            $list = $_SESSION['cart'];
            unset($_SESSION['success']);
            if (isset($_GET['id'])) {
                $obj->deleteCart($_GET['id']);
            }
            $count = $obj->totalCart();
            include './views/list.php';
            break;
        case 'listproduct':
            unset($_SESSION['success-update']);
            $list = $obj->listData();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $id = $_POST['id'];
                $obj->insertCart($name, $price, $id);
                $_SESSION['success'] = 'Add product to Cart successfully';
            }
            include './views/listproduct.php';
            break;
        case 'update':
            unset($_SESSION['success-update']);
            if (isset($_GET['id'])) {
                $productDetail = [];
                $id = $_GET['id'];
                $list = $_SESSION['cart'];
                foreach ($list as $key => $value) {
                    if ($id == $value['pro_id']) {
                        $productDetail = $list[$key];
                    }
                }
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    if (isset($id)) {
                        $obj->updateCart($name, $price, $quantity, $id);
                    }
                    $_SESSION['success-update'] = 'Update product for Cart successfully';
                }
            }
            include './views/update.php';
            break;
        default:
            $list = $_SESSION['cart'];
            unset($_SESSION['success']);
            if (isset($_GET['id'])) {
                $obj->deleteCart($_GET['id']);
            }
            $count = $obj->totalCart();
            include './views/list.php';
            break;
    }
    include 'footer.php';
}
