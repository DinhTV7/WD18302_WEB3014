<?php
// Định nghĩa ra 1 class SinhVien
class SinhVien {
    // Khai báo các thuộc tính (Biến trong class)
    public $hoTen;
    public $namSinh;
    public $maSV;

    // Magic function (hàm khởi tạo)
    // Tên hàm __construct là cố định và không thể thay đổi
    // PHP sẽ tự động tìm và ưu tiên chạy hàm này đầu tiên nếu nó tồn tại
    // Thường dùng để khởi tạo các giá trị ban đầu của thuộc tính
    public function __construct($hoTen, $namSinh, $maSV)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->maSV = $maSV;
    }

    // Phương thức để set giá trị cho thuộc tính hoTen
    // Set giá trị cho 1 thuộc tính riêng biệt
    // public function setHoTen($hoTen) {
    //     $this->hoTen = $hoTen;
    // }

    // public function setNamSinh($namSinh) {
    //     $this->namSinh = $namSinh;
    // }

    // public function setMaSV($maSV) {
    //     $this->maSV = $maSV;
    // }

    public function tinhTuoi() {
        $tuoi = date('Y') - $this->namSinh;
        return $tuoi;
    }

    // Khai báo 1 phương thức
    public function hienThiThongTin () {
        // Để sử dụng thuộc tính trong class ta sẽ dùng cấu trúc
        // $this->tên thuộc tính
        echo $this->hoTen . " - " . 
            $this->namSinh . " - " . 
            $this->maSV . " - " . 
            $this->tinhTuoi() . "<br>";
    }
}
// Khởi tạo 1 đổi tượng
$sv1 = new SinhVien("Tạ Văn Định", 2004, "PH11111");
// Gán giá trị cho thuộc tính
// $sv1->setHoTen("DinhTV7");

// Khai báo thêm 2 thuộc tính (namSinh, maSV)
// Viết phương thức set giá trị cho các thuộc tính
// Hiển thị đầy đủ thông tin của SinhVien ra màn hình vẫn sd hienThiThongTin()
// $sv1->setNamSinh(2004);
// $sv1->setMaSV("PH99999");
$sv1->hienThiThongTin();

// Khởi tạo 1 đối tượng SinhVien mới
// Xây dựng thêm 1 phương thức có trả về tinhTuoi 
// tuoi = năm hiện tại - namSinh
// Hiển thị tất cả các thông tin ra màn hình
// Ten, namSinh, maSV, tuoi

$sv2 = new SinhVien("Nguyễn Văn A", 1989, "PH99999");
$sv2->hienThiThongTin();


// Khởi tạo 1 class GiangVien gồm các thuộc tính
// (maGV, tenGV, namBatDau, luongGV (trong 1 giờ), soGioDay)
// Tạo phương thức set giá trị cho các thuộc tính ở trên
// Tạo 1 phương thức tính tongLuong = luongGV * soGioDay
// Tạo 1 phương thức để hienThiThongTinGV gồm đầy đủ 
// các thuộc tính và tổng lương
// Khởi tạo tối thiểu 3 GV