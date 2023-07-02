<?php 

class Fruit
{
    public $name;
    public $weight;
    public $price; 

    function __construct($name, $weight, $price)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->price = $price;
    }
	
    function bill()
    {
        if ($this->weight > 1000) {
            return ($this->price * $this->weight) * 0.1;
        }
            
		return $this->price * $this->weight;
    }

}

$orange = new Fruit("Trái cam", 2000, 1500);
$price = $orange->bill();
echo $price;

?>