<?php
session_start();
//    rút kinh nghiệm phải để sesion là 1 mảng trống nằm ở cục bộ
include('controller/user.php');
include('header.php');
// cái này giúp sesion không bị xoá khi chuyển trang
if (!isset($_SESSION['listUser'])) {
    $_SESSION['listUser'] = [];
}
if (isset($_GET['act']) && $_GET['act'] !== "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'list':
            $listUser = $_SESSION['listUser'];
            include_once('user/list.php');
            break;
        case 'add':
            unset($_SESSION['success-user']);
            addUser();
            include_once('user/add.php');
            break;
        case 'update':
            unset($_SESSION['success-user']);
            if (isset($_GET['id'])) {
                update($_GET['id']);
            }
            include_once('user/update.php');
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                delete($_GET['id']);
            }
            break;
        default:
            include_once('user/list.php');
            break;
    }
} else {
    include('footer.php');
}
include('footer.php');
