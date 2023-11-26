<?php
function san_pham_all() {
    $conn = connection();
    $sql = "SELECT * FROM san_pham";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $san_pham_all = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $san_pham_all;
}

function chi_tiet_san_pham($ma_sp) {
    $conn = connection();
    $sql = "SELECT * FROM san_pham WHERE id = $ma_sp";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $san_pham = $stmt->fetch(PDO::FETCH_ASSOC);
    return $san_pham;
}
