<?php
// giúp điều hướng đến controler mà ta sử dụng
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';
require_once "Controller/ProductController.php";
$productController = new ProductController();

switch ($url) {
    case '/':
        // Trỏ đến controller mà ta sử dụng
        $productController->listProduct();
        break;
    case 'add-product':
        // Trỏ đến controller mà ta sử dụng
        $productController->addProduct();
        break;
}

// Tạo nút thêm sản phẩm
// Sau khi ấn vào nút sẽ dẫn tới url có tên là add-product
// url add-product sẽ trỏ tới hàm có tên là addProduct trong ProductController
// Echo hiển thị "Đây là trang thêm sản phẩm";

// Lab 3: Tiếp tục hoàn thiện các chức năng thêm, sửa, xóa