<?php
require_once "app/models/connection.php";
require_once "app/models/ClientModel.php";
require_once "app/controllers/ClientController.php";
session_start();
$act = $_GET['act'] ?? '';

switch ($act) {
    case '':
    case 'trang_chu':
        home_page();
        break;
    case 'san_pham':
        san_pham();
        break;
    case 'gio_hang':
        gio_hang();
        break;
    default:
        echo "404 NOT FOUND!";
}
