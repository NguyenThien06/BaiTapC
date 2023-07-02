<?php
   
   class model{
       public $canh;
       function setCanh($canh) 
       {
           $this->canh = $canh;
       }
       function getCanh()
       {
         return $this->canh;
       }
       function chuvi($a , $b) 
       {
           return ($a + $b)*2;
       } 
       function dientich($a, $b)
       {
         return $a * $b;
       }
   }

?>