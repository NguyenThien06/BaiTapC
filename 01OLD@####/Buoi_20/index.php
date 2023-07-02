<?php

// class Contact
// {
//     const DEFAULT_UPLOAD = 'public/uploads/menu';

//     public function add()
//     {
//         return self::DEFAULT_UPLOAD; 
//     }
// }

#echo Contact::DEFAULT_UPLOAD;


#Lớp trừu tượng
/*
    - Lớp trừu tượng chứa những function trừu tượng (abstract) thì khi lớp con kế thừa 
      Bắt Buộc phải chạy lại function trừu tượng đó.
    - Function trừu tượng chỉ khai báo mà không được viết code bên trong
    - Function trừu tượng có thể thêm tham số và ở class kế thừa cũng phải ghi lại 
        đúng số lượng tham số truyền vào hoặc có thể nhiều hơn
    - Vì nó là class nên có thể khai báo thuộc tính và phương thức như bình thường
    - Access phải bằng hoặc ít hạn chế hơn: private => protected => public

    abstract class DongVat
    {
        public $name;
        public function set($name)
        {
        return $name;
        }

        abstract public function name($name);

        abstract function color();
    } 

    class Meo extends DongVat
    {
        public function name($name)
        {
        return 'Tên mèo mun';
        }

        public function color()
        {
        return 'Có màu đen mun';
        }

        public function test()
        {
            return 'Chạy';
        }
    }

    $meo = new Meo();
    echo$meo->set('Mèo Đen');
    echo $meo->test();

*/
/*
    interface
     1. Khai báo bằng từ khóa interface name {}
     2. Interface chỉ chứa những function
     2. Function không chứa code
     3. Cũng truyền tham số vào function 

    interface Helper {
        public function abc($name);
        public function def();
    }

    interface Str {
        public function xyz();
    }

    class DongVat implements Helper, Str
    {
        public function abc($name)
        {
            echo $name;
        }

        public function def()
        {

        }

        public function xyz()
        {

        }
    }

    $dv = new DongVat;
    $dv->abc('Mèo');

*/

/*
trait
*/

trait KhuyenMai {
    function LeHV($tien = 0) {
        return $tien * 2;
    }

    function Tet($tien = 0) {
        return $tien * 3;
    }
}

trait Phat {
    function LeHV($tien = 0) {
        return $tien - ($tien * 50 / 100 );
    }
}


class Luong
{
    use KhuyenMai, Phat {
        KhuyenMai::LeHV insteadof Phat;
        Phat::LeHV as KhuyenMaiABC;
    }

    public $sogio;
    
    public function __construct($sogio = 0)
    {
        return $this->sogio = $sogio;
    }

    public function tinhLuong()
    {
        return $this->sogio * 50;
    }
}

$nhanvienA = new Luong(10);
$luong = $nhanvienA->tinhLuong();

echo 'Lương gốc:' . $luong;

echo '<hr >';

echo 'Lương thưởng: ' . $luongthuong = $nhanvienA->LeHV($luong);

echo '<hr >';

#echo 'Lương phạt: ' . $nhanvienA->Loi($luongthuong);