<?php
require "test1.php";
require "test2.php";

// Trong trường hợp sử dụng 2 class trùng tên mà đã định danh namespace
// thì ta phải tạo bí danh cho class đó
use Test1\SinhVien as SinhVienTest1;
use Test2\SinhVien as SinhVienTest2;

// Trường hớp sử dụng 2 class trùng tên
// thì ta phải sử dụng namespace

// namespace trong PHP giúp tạo ra định danh riêng cho class
// namespace luôn luôn được đặt ở đầu file PHP
// đóng vai tròng là không gian đại diện cho class/function/biến ở trong file đó
// namespace giúp gom các class lại để quản lý code dễ dàng hơn

// Cách sử dụng:
// Cách 1:
// $tenObject = new TenNameSpace\TenClass();
// $svTest1 = new Test1\SinhVien("DinhTV7", 2004);
// $svTest1->hienThiThongTin();
// $svTest2 = new Test2\SinhVien("DinhTV7", 18);
// $svTest2->hienThiThongTin();

// Cách 2: Khi namespace quá dài thì ta nên sử dụng cách này
// use TenNameSpace\TenClass;
// $tenObject = new TenClass();

$svTest1 = new SinhVienTest1("DinhTV7", 2004);
$svTest1->hienThiThongTin();
$svTest2 = new SinhVienTest2("DinhTV7", 18);
$svTest2->hienThiThongTin();