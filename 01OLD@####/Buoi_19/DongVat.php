<?php


class DongVat
{
    public $name;

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    protected function setName($name = '')
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    
}