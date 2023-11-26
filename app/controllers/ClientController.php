<?php
function view($path, $data = [], $errors = [], $value = [])
{
    extract($data);
    extract($value);
    include_once "app/views/" . $path . ".php";
}

function home_page() {
    $list_san_pham = san_pham_all();
    $view_name = "app/views/Client/trang_chu.php";
    view('Client/layout', ['view_name' => $view_name, 'list_san_pham' => $list_san_pham]);
}

function san_pham() {
    $ma_sp = $_GET['ma_sp'];
    $list_san_pham = san_pham_all();
    $chi_tiet_san_pham = chi_tiet_san_pham($ma_sp);
    $view_name = "app/views/Client/chi_tiet_san_pham.php";
    view('Client/layout', [
        'view_name' => $view_name,
        'list_san_pham' => $list_san_pham,
        'chi_tiet_san_pham' => $chi_tiet_san_pham
    ]);
}

function gio_hang() {
    $view_name = "app/views/Client/gio_hang.php";
    view('Client/layout', [
        'view_name' => $view_name
    ]);
}