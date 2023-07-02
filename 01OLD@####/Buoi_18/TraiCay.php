<?php

class TraiCay
{
    public $ten;
    public $trongluong;
    public $sotien;

    function setTen($ten)
    {
        return $this->ten = $ten;
    }

    function setTrongLuong($trongluong)
    {
        return $this->trongluong = $trongluong;
    }

    function setSoTien($sotien)
    {
        return $this->sotien = $sotien;
    }

    function tinh()
    {
        $giatien = $this->trongluong * $this->sotien;

        return $this->trongluong > 1 ? $giatien * 1.1 : $giatien;
    }
}

$traiTao = new TraiCay();

$traiTao->setTen('Táo Mỹ');
$traiTao->setTrongLuong(1.5);
$traiTao->setSoTien(250000);

echo $traiTao->tinh();

/*
    Truyền 2 tham số vào và kiểm tra hình dáng.
    Tính diện tích, chu vi hình chữ nhật và hình vuông
    Class Tinh
   
*/