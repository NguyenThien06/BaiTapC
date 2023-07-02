<?php

class Controller
{
    protected function read()
    {
        return 'Bạn có quyền Đọc';
    }

    protected function edit()
    {
        return 'Bạn có quyền Sửa';
    }

    protected function delete()
    {
        return 'Bạn có quyền Xóa';
    }
}