<?php

class ConMeo extends DongVat
{
    public function validate($name = '')
    {
        #design pattern
        if (strpos($name, 'ABC') === false) {
            return $this->get($name);
        }
        
        echo 'Lỗi kiểm tra lại';
    }

    protected function get($name = '')
    {
        $this->setName($name);

        echo $this->name;

        #return $this->getName();  Gọi method bên class Cha

       # return $this->name; #Gọi thuộc tính bên class Cha
    }
}