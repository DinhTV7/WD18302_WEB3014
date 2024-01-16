<?php
// Tạo 1 class ConNguoi gồm các thuộc tính: hoTen, diaChi, namSinh, email, sdt
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// Tạo phương thức hiển thị thông tin: hoTen, diaChi, tuổi, email, sdt

class ConNguoi
{
    protected $hoTen;
    protected $diaChi;
    protected $namSinh;
    protected $email;
    protected $sdt;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt)
    {
        $this->hoTen = $hoTen;
        $this->diaChi = $diaChi;
        $this->namSinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;
    }

    public function tinhTuoi()
    {
        $tuoi = date('Y') - $this->namSinh;
        return $tuoi;
    }

    public function hienThiThongTin()
    {
        echo "Họ tên: " . $this->hoTen . "<br/>";
        echo "Địa chỉ: " . $this->diaChi . "<br/>";
        echo "Năm sinh: " . $this->tinhTuoi() . "<br/>";
        echo "Email: " . $this->email . "<br/>";
        echo "SĐT: " . $this->sdt . "<br/>";
    }
}
$conNguoi = new ConNguoi("Tạ Văn Định", "Nam Định", 2004, "dinhtv7@fpt.edu.vn", "0379204876");
$conNguoi->hienThiThongTin();

// Tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính: diemToan, diemLy, diemHoa
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tính điểm tb của HocSinh = (Toán + lý+ hóa)/3
// Tạo phương thức hiển thị thông tin HocSinh hiển thị ra các thông tin:
// hoTen, diaChi, namSinh, email, sdt, điểm TB

class HocSinh extends ConNguoi
{
    protected $diemToan;
    protected $diemLy;
    protected $diemHoa;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $diemToan, $diemLy, $diemHoa)
    {
        // parent:: dùng để gọi một phương thức hoặc thuộc tính từ lớp cha
        // Để đảm bảo cả lớp cha và lớp con đều được khởi tạo đầy đủ thông tin
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $sdt);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }

    public function diemTB()
    {
        $diemTB = ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
        return $diemTB;
    }

    public function hienThiThongTin()
    {
        parent::hienThiThongTin();
        echo "Điểm TB: " . $this->diemTB() . "<br/>";
    }
}

$hocSinh = new HocSinh("Tạ Văn Định 2", "Nam Định", 2004, "dinhtv7@fpt.edu.vn", "0379204876", 5, 6, 7);
$hocSinh->hienThiThongTin();

// Tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính: luongCB, soGioDay
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tính tổng lương = luongCB * soGioDay
// Tạo phương thức hiển thị thông tin GiangVien hiển thị ra các thông tin
// hoTen, diaChi, namSinh, email, sdt, tổng lương

// Khởi tạo 2 đối tượng HocSinh và GiangVien 
// có đầy đủ các thuộc tính cả lớp cha và lớp con

//  Đề ASM 1
//  Tạo ra 1 bảng customer gồm các trường dữ liệu
//  id, ten_kh, email, sdt
//  Xây dựng các chức năng thêm, sửa, xóa, hiển thị khách hàng
//  Chuyển từ mô hình MVC không có class thành MVC có class
//  Yêu cầu sử dụng đúng mô hình thầy hướng dẫn