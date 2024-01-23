<?php
// interface không phải là class
// interface là một khuôn mẫu để tạo ra bộ khung cho các class
// interface giống như 1 bản hợp đồng ràng buộc
// và bắt buộc lớp sử dụng phải có đầy đủ phương thức trong interface đó
interface DiChuyen
{
    // MỘT SỐ ĐẶC ĐIỂM

    // Không được phép khai báo thuộc tính
    // public $hoTen; //Lỗi

    // Trong interface chỉ được phép khai báo phương thức,
    // không được phép triển khai nội dung phương thức
    public function di();

    // Phạm vi truy cập chỉ được sử dụng public mà không được dùng private và protected
    // private function di2(); // LỖI
    // protected function di3(); // LỖI
}
// Không được khởi tạo đối tượng từ interface
// $dongVat = new DiChuyen(); LỖI

// Để sử dụng interface, ta cần định nghĩa 1 class mới và implements từ interface đó
class ConNguoi implements DiChuyen
{
    // Các class implements từ interface phải định nghĩa tất cả phương thức từ interface đó
    // Ko đc thay đổi phạm vi truy cập của phương thức
    public function di() {
        echo "Đi bằng 2 chân";
    }
}

// Một class có thể implement được nhiều interface
interface DiChuyen2
{
    public function di2();
}
class Oto implements DiChuyen, DiChuyen2
{
    public function di() {
        echo "Đi bằng 4 bánh";
    }
    public function di2() {
        echo "Đi bằng 6 bánh";
    }
}

// Các interface có thể kế thừa lẫn nhau
interface DiChuyen3 extends DiChuyen, DiChuyen2
{
    public function di3();
}

// => interface và abstract class đều là bản thiết kế chung của các class
// Nhưng mức độ mở rộng dự án của interface sẽ cao hơn (vì nó có tính đa kế thừa)

// Dùng abstract class khi: 
// - Muốn chia sẻ thuộc tính và phương thức giữa các lớp
// - Khi muốn class chứa những thành phần protected
// => Xác định có sử dụng kế thừa để chia sẻ dữ liệu
// và các lớp có mối liên hệ với nhau

// Dùng interface khi: 
// - Muốn sử dụng đa kế thừa
// - Định nghĩa các phương thức chung cho lớp
// (ko cần phải có mối quan hệ với nhau)