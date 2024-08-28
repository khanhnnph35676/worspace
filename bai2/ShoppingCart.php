<?php
    namespace App;
        // $_SESSION['cart'] = [];
    class ShopingCart extends DB{
        public function listData(){
            $sql= "SELECT * FROM tbl_product";
            return $this->getData($sql);
        }
        public function insertCart($name,$price,$id){
            $data = [
                'pro_name'=>$name,
                'pro_price'=>$price,
                'pro_id'=>$id,
                'quantity'=>1
            ];
             $found = false;
            foreach($_SESSION['cart'] as $key=>$value){
                if($value['pro_id'] == $id){
                    $_SESSION['cart'][$key]['quantity'] += 1;
                    $found = true;
                    break;
                }
            }
            if(!$found){
                $_SESSION['cart'][]= $data;
            }
            
        }
        public function updateCart($name,$price,$quantity,$id){
            $data = [
                'pro_name'=>$name,
                'pro_price'=>$price,
                'pro_id'=>$id,
                'quantity'=>$quantity
            ];
            foreach($_SESSION['cart'] as $key=>$value){
                if($value['pro_id'] == $id){
                    $_SESSION['cart'][$key] = $data;
                    break;
                }
            }
            header("Location: index.php?url=list");
        }
        public function deleteCart($id){
            foreach($_SESSION['cart'] as $key=>$value){
                if($value['pro_id'] === $id){
                    unset($_SESSION['cart'][$key]);
                    break;
                }
            }
        }
        public function totalCart(){
            $_SESSION['count_cart'] = 0;
            foreach($_SESSION['cart'] as $key=>$value){
                $_SESSION['count_cart']+=$value['quantity'];
            }
            return $_SESSION['count_cart'];
        }
        public function contentCart(){
            
        }
    }
?>