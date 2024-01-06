<?php
require_once "db.php";
function getProduct () {
    $sql = "SELECT * FROM product";
    $conn = getConnect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}