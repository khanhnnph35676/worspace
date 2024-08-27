<?php
include 'validate.php';

function addUser()
{
    // cái này giúp sesion không bị xoá khi chuyển trang
    // if (!isset($_SESSION['listUser'])) {
    //     // $_SESSION['error'] = [];
    // }
   
    $_SESSION['error'] = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gener'];
        $data = [
            'user_id' => rand(1, 100),
            'username' => $userName,
            'email' => $email,
            'address' => $address,
            'phone' => $phone,
            'gender' => $gender,
        ];
        foreach ($_SESSION['listUser'] as $value) {
            if ($value['email'] == $email ) {
                $_SESSION['error']['email'] ='This Email already existed';
                break;
            }
        }
        validate($userName,$email,$address,$phone,$gender);

        if ($_SESSION['error'] == NUll) {
            $_SESSION['listUser'][] = $data;
            $_SESSION['success-user'] = 'Add new user successfully';
            header('Location: ?act=list');
        }
      
       
    }
}

function update($id)
{
    $_SESSION['error'] = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gener'];
        $data = [
            'user_id' => rand(1, 100),
            'username' => $userName,
            'email' => $email,
            'address' => $address,
            'phone' => $phone,
            'gender' => $gender,
        ];
        validate($userName,$email,$address,$phone,$gender);
        if ($_SESSION['error'] == NULL) {
            foreach ($_SESSION['listUser'] as $key => $value) {
                if ($value['user_id'] == $id) {
                    $_SESSION['listUser'][$key] = $data;
                    break;
                }
            }
            $_SESSION['success-user'] = 'Update user successfully';
            header('Location: ?act=list');
        }
    }
}
function delete($id)
{
    foreach ($_SESSION['listUser'] as $key => $value) {
        if ($value['user_id'] == $id) {
            unset($_SESSION['listUser'][$key]);
            $_SESSION['success-user'] = 'Delete user successfully';
            break;
        }
    }
    header('Location: ?act=list');
}
