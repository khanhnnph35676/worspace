<?php
     namespace App;
     use PDO;
     class DB{
         public function getConnect(){
            $connect = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME.
                                ';charset='.DBCHASET,DBUSER,DBPASSWORD);
            return $connect;
          }
          function getData($query,$getAll = true){
            $conn = $this->getConnect();
            $stmt = $conn->prepare($query);
            $stmt->execute();
            if($getAll){
                return $stmt->fetchAll();
            }
            return $stmt->fetch();
        }
     }  
?>