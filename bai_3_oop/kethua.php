<?php
// Tính kế thừa trong OOP
// Một class kế thừa từ class cha của nó
// Thì nó có thể sử dụng các thuộc tính và phương thức của class cha

// Demo tính kế thừa
class ConNguoi
{
    public $ten;
    public $tuoi;
    public $tay;
    public $chan;

    public function setTay($soTay)
    {
        $this->tay = $soTay;
    }

    public function setChan($soChan)
    {
        $this->chan = $soChan;
    }

    public function an() 
    {
        echo "Ăn bằng mồm";
        echo "<br/>";
    }
    public function hienThi() {
        echo "Chào các bạn";
    }
}

class TreCon extends ConNguoi
{
    public function bo()
    {
        // parent::     gọi một phương thức hoặc thuộc tính từ class cha
        parent::hienThi();
        echo "Trẻ con bò bằng " . $this->tay . " tay và " . $this->chan . " chân";
        echo "<br/>";
    }
}

$treCon = new TreCon();
$treCon->an();
$treCon->setTay(2);
$treCon->setChan(2);
$treCon->bo();

// Tạo 1 class NguoiLon kế thừa lại class ConNguoi
// Trong class NguoiLon tạo 1 phương thức di() hiển thị
// Người lớn đi bằng ? chân

class NguoiLon extends ConNguoi
{
    public $longNach;
    public function di()
    {
        echo "Người lớn đi bằng " . $this->chan . " chân";
        echo "<br/>";
    }
}
$nguoiLon = new NguoiLon();
$nguoiLon->setChan(2);
$nguoiLon->di();

// Phạm vi truy cập
// Public
// Private
// Protected

class TruyCap
{
    public $public = "Có thể truy cập ở bất kỳ đâu";
    private $private = "Chỉ có thể truy cập ở bên trong class";
    protected $protected = "Chỉ có thể truy cập bên trong class và các class kế thừa";

    public function layPrivate ()
    {
        return $this->private;
    }
}

class TruyCap_2 extends TruyCap
{
    public function layProtected() {
        return $this->protected;
    }
}
$phamViTruyCap = new TruyCap();
echo $phamViTruyCap->public;
echo "<br/>";
echo $phamViTruyCap->layPrivate();
echo "<br/>";

$test = new TruyCap_2();
echo $test->layProtected();
// echo $phamViTruyCap->protected;
echo "<br/>";
