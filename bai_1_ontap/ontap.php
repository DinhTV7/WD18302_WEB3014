<?php
// Có bao nhiêu kiểu dữ liệu. Lấy ví dụ từng kiểu dữ liệu
$ho_ten = "Tạ Văn Định"; // Kiểu chuỗi
$nam_sinh = 2004; // Kiểu số nguyên
$diem_tb = 5.5; // Kiểu số thực
$myBoolean = true; // Chỉ có 2 giá trị true/false
$myNull = null; // Biến này trống rỗng (không có gì cả)

$sdt = "0379204876";

echo $ho_ten;
echo "<br>";

// Mảng
// Cách khai báo mảng
$mang_1 = []; // Sử dụng để khai báo mảng
$mang_2 = array();

// Các loại mảng
// Mảng tuần tự
// là mảng mà các phần tử có vị trí cố định 
// là các số nguyên
$arr_1 = [1, 3, 6, "Xin chào bây bi", 6.5];

// VD: Khai báo 1 mảng gồm họ tên 5 nyc
// Sử dụng for và foreach để in ra họ tên của 5 nyc
$arr =[
    'heallo',
    'le duc ngoc hai',
    'ha duy tinh',
    'vu huy bo',
    'nguyen xuan ha'
];
foreach($arr as $value){
    echo $value;
    echo "<br>";
}

for($i = 0 ; $i < count($arr) ; $i++){
   echo $arr[$i];
   echo "<br>";
}

// Mảng liên hợp
// Là mảng mà các phần tử được chỉ định bới các key duy nhất
// thay vì các số nguyên mặc định
$sinh_vien = [
    'ho_ten' => 'Tạ Văn Định',
    'nam_sinh' => 2004,
    'sdt' => '0379204876'
];

var_dump($sinh_vien);
echo "<br>";
print_r($sinh_vien);

// VD: sử dụng foreach để in ra các giá trị của phần tử

// LAB 1:
// BT1: Khai báo 1 mảng gồm 10 phần tử là các số nguyên ngẫu nhiên
// Sử dụng for và foreach để 
// in ra và tính tổng các số là số chẵn trong mảng
// BT2: Cho một mảng màu sắc. Hiển thị thông tin (key, value)
// Của mảng ra dưỡi dạng table. 
// Màu backgroud của từng dòng tương ứng với màu hiển thị ra
$mau_sac = [
    'red' => 'Màu đỏ',
    'blue' => 'Màu xanh dương',
    'green' => 'Màu xanh lá',
];