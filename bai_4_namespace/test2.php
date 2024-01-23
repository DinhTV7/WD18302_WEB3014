<?php
namespace Test2;
// Tạo 1 class SinhVien (ten, tuoi)
// Gán giá trị cho các thuộc tính
// Phương thức hienThiThongTin
class SinhVien 
{
    public $ten;
    public $tuoi;

    public function __construct($ten, $tuoi)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }

    public function hienThiThongTin()
    {
        echo "Tên " . $this->ten . "<br/>";
        echo "Tuổi " . $this->tuoi . "<br/>";
    }
}