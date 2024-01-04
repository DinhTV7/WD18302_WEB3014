<?php
// Hàm là một khối code dùng để thực hiện 1 công việc cụ thể
// và có tính tái sử dụng cao

function tenHam() {
    // Công việc thực hiện
}
tenHam();

// Viết 1 hàm không trả về kiểm tra xem số truyền vào là số chẵn hay lẻ
// Hiển thị kết quả ra màn hình.
function kiemTraChanLe($num) {
    if ($num % 2 == 0) {
        echo "$num là số chẵn";
    } else {
        echo "$num là số lẻ";
    }
}
$a = 6;
kiemTraChanLe($a);

// Viết hàm có trả về tính diện hình thang.
function tinhDienTichHinhThang ($dayLon, $dayBe, $chieuCao) {
    $ket_qua = ($dayLon + $dayBe) * $chieuCao / 2;
    return $ket_qua;
}
$lon = 7;
$be = 5;
$cao = 3;
$dien_tich_hinh_thang = tinhDienTichHinhThang($lon, $be, $cao);
echo $dien_tich_hinh_thang;

// Lab 2:
// BT1: Sử dụng hàm trả về để tính phương bậc 2
// BT2: Sử dụng hàm không trả về để thực hiện công việc sau:
// Truyền các thông tin: Họ tên, năm sinh, giới tính (0: nam; 1: nữ)
// Kiểm tra xem người đó có đủ tuổi đi NVQS không
// Hiển thị thông "Ông/Bà họ tên có/không đủ tuổi đi NVQS
// Giới tính lấy từ 0/1
// Tuổi = năm hiện tại - năm sinh
// Độ tuổi đi NVQS là từ 18 đến 27 tuổi