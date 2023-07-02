<?php

/*  access
    public
    protected
    private
*/

// class Helper
// {
//     public function __construct()
//     {
//         echo 123;
//     }

//     public static function toSlug($str = '')
//     {
//         $str = trim(mb_strtolower($str)); #Bỏ khoảng trắng 2 đầu
//         $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
//         $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
//         $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
//         $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
//         $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
//         $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
//         $str = preg_replace('/(đ)/', 'd', $str);
//         $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
//         $str = preg_replace('/([\s]+)/', '-', $str);

//         return $str;
//     }

//     public static function test($string = '')
//     {
//         return self::toSlug($string);
//     }
// }

// class Test extends Helper
// {
//     public static $name = 'Nguyễn Văn B';

//     public function __construct()
//     {
//        # parent::__construct(); # Khởi tạo class Helper 
//         echo 'Chạy Test';
//     }

//     public function chay()
//     {
//         echo self::$name;
    
//         echo parent::test('nguyễn văn a');
//     }
// }

/*
    static method => public static function() {}
        -> gọi bên trong class bằng self::function()
        -> gọi bên ngoài class bằng Class::function()
        -> gọi bên trong class được kế thừa parent::function() 
*/


#echo Test::$name;

// $test = new Test();
// echo '<hr>';


// $test->chay();

// $title = "Sản phẩm nước hoa Nam";
#$slug  = "san-pham-nuoc-hoa-nam";

// $Helper = new Helper();

// echo $Helper->toSlug($title);

