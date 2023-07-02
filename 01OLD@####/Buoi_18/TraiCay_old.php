 <?php
 class TraiCay
 {
   public $ten;
   public $trongluong;
   public $tien;
   
   

   function setName($ten)
   {
       $this->ten = $ten;
   }
   
   function getName()
   {
       return $this->ten;
   }
   
   function setTien($tien)
   {
       $this->tien = $tien;
   }
   
   function getTien()
   {
       return $this->tien;
   }
   
   function setTrongLuong($trongluong)
   {
       $this->trongluong = $trongluong;
   }
   
   function getTrongLuong()
   {
       return $this->trongluong;
   }
   
   function layTien()
   { 
		
		if($this->trongluong > 1 ) {
			 return ($this->tien * $this->trongluong) * 0.1;
		}	 
	
		return $this->tien * $this->trongluong;
   }
 }
 
$tcay = new traicay();
$tcay->setName('Cay me');
$tcay->setTien(1000);
$tcay->setTrongLuong(300);

echo $tcay->getName();
echo $tcay->getTien();
echo $tcay->getTrongLuong();
echo $tcay->laytien();

  ?>