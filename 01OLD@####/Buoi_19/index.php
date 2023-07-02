<?php

include 'DongVat.php';

include 'ConMeo.php';

#extends => kế thừa
#access trong opp
# fuction => public function 
/* Access
    => Public: Gọi thuộc tính và phương thức bên ngoài class, 
                bên trong class và class được kế thừa
    => Protected: Gọi thuộc tính và phương thức bên trong class và
                class được kế thừa
    => Private: Gọi thuộc tính và phương thức bên trong chính class

*/
$ConMeo = new ConMeo();

$ConMeo->validate('Mèo');

#$ConMeo->setName('Mèo Tam Thể');

/*
    (1): User, Customer, Admin
        User => xem bài viết
        Customer => Thêm sửa
        Admin => toàn quyền 
    
    Class CURD {} => 4 function tương ứng 4 quyền Thêm, Xem, Sửa - Update, delete

    2 đối tượng là Post và Menu

    ở view tạo form
    Nhập vào tên người dùng, quyền truy cập *(1) 
    và kiểm tra xem có được phép xài tính năng đó hay không
*/

class Post extends CURD
{
    public function validate($name, $level)
    {
       $this->admin
    }

    protected user()
    {
        $this->view();
    }

    protected customer()
    {
        $this->create();
        $this->update();
    }

    protected admin()
    {
        $this->create();
        $this->update();
        $this->delete();
    }
}