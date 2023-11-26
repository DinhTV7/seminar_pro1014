<?php

// Kiểm tra nếu cookie 'cart' không tồn tại, tạo một mảng trống
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    if (isset($cart[$productId])) {
        // Nếu tồn tại, cập nhật số lượng
        $cart[$productId]['quantity'] += $quantity;
    } else {
        // Nếu chưa tồn tại, thêm mới vào giỏ hàng
        $cart[$productId] = ['quantity' => $quantity];
    }

    // Lưu giá trị vào cookie 'cart'
    setcookie('cart', json_encode($cart), time() + (86400 * 7), "/"); // Thời hạn cookie: 7 ngày
}

// Xóa sản phẩm khỏi giỏ hàng nếu có yêu cầu
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_product_id'])) {
    $removeProductId = $_POST['remove_product_id'];

    // Kiểm tra xem sản phẩm tồn tại trong giỏ hàng không
    if (isset($cart[$removeProductId])) {
        // Nếu tồn tại, xóa sản phẩm khỏi giỏ hàng
        unset($cart[$removeProductId]);

        // Cập nhật cookie 'cart' sau khi xóa
        setcookie('cart', json_encode($cart), time() + (86400 * 7), "/"); // Thời hạn cookie: 7 ngày

    }
}
