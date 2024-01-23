<?php
// Trừu tượng là gì?
// Cái gì mà chúng ta không cụ thế hóa nó được thì ta trừu tượng hóa nó lên

abstract class Crush
{
    // MỘT SỐ ĐẶC ĐIỂM CỦA abstract class

    // Một class được gọi là class trừu tượng khi nó chứa phương thức trừu tượng
    abstract public function thichToi();
    // Phương thức trừu tượng chỉ được phép khai báo trong class trừu tượng
    // Và không được triển khai nội dung

    // Nếu không phải là phương thức trừu tượng thì vẫn triển khai như bình thường
    public function di() {
        echo "Đi bằng 2 chân";
    }

    // Chỉ có phương thức trừu tượng chứ không thuộc tính trừu tượng
    // abstract public $hoTen; LỖI
    public $hoTen;

    // Phạm vi truy cập trong lớp trừu tượng chỉ được khai báo là public hoặc protected
    // abstract private function chay(); LỖI
}
// Không thể khởi tạo đội tượng từ class abstract
// $crush1 = new Crush(); // LỖI

// Các lớp kế thừa lại lớp trừu tượng phải định nghĩa lại tất cả 
// phương thức trừu tượng trong class trừu tượng đó
class nguoiYeuCu extends Crush
{
    // Phương thức trừu tượng không thể sử dụng với parent::
    // parent::thichToi(); Lỗi
    public function thichToi()
    {
        echo "Đã từng thích tôi";
    }
}
$nyc1 = new nguoiYeuCu();
$nyc1->thichToi();
$nyc1->di();