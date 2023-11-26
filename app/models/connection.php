<?php
function connection()
{
    // Thông tin kết nối cơ sở dữ liệu
    $servername = "localhost";
    $username = "root";
    $database = "seminar_pro1014";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        // Xử lý ngoại lệ nếu có lỗi kết nối CSDL hoặc truy vấn
        echo "Lỗi kết nối CSDL: " . $e->getMessage();
    }
}
