<?php
require_once "Model/Product.php";
function listProduct () {
    $products = getProduct(); 
    // là hàm trả về nên phải tạo ra 1 biến để chứa giá trị
    // var_dump($products);
    // echo "Sinh viên nhớ người cũ";
    include_once "View/Product/listproduct.php";
}

function addProduct () {
    echo "Đây là trang thêm sản phẩm";
}