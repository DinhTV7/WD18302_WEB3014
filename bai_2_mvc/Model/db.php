<?php
require_once "env.php";
function getConnect()
{
    $connect = new PDO(
        "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME,
        DBUSER,
        DBPASS
    );
    return $connect;
}
// Hàm xử lý 5 trong 1 Hiển thị, Thêm, Sửa, Xóa, Detail
function dataProcess($query, $getAllData = true) {
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getAllData) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $stmt->fetch(PDO::FETCH_ASSOC);
}