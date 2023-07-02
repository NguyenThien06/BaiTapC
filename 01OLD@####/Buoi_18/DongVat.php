<?php


class DongVat
{
    public $name; #Thuộc tính của 1 class
    public $numberFoot; #Thuộc tính của 1 class
    public $color;

    public function __construct($color) #Function khởi tạo của Class
    {
        $this->color = $color;
    }

    function setName(string $string = '')
    {
        $this->name = $string;
    }

    function getName() #Method 
    {
        return $this->name; #Cách gọi thuộc tín bên trong class
    }

    function show()
    {
        return $this->getName(); # Cách gọi function bên trong class
    }
}
