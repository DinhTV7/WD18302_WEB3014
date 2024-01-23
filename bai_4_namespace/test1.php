<?php
namespace Test1;
// Tạo 1 class SinhVien (ten, namSinh)
// Gán giá trị cho các thuộc tính
// Phương thức hienThiThongTin
class SinhVien 
{
    public $ten;
    public $namSinh;

    public function __construct($ten, $namSinh)
    {
        $this->ten = $ten;
        $this->namSinh = $namSinh;
    }

    public function hienThiThongTin()
    {
        echo "Tên " . $this->ten . "<br/>";
        echo "Năm sinh " . $this->namSinh . "<br/>";
    }
}