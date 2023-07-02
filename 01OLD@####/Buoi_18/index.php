<?php
include 'DongVat.php';

#$dongVat = new DongVat; #Khởi tạo 1 class
$dongVat = new DongVat("Đen"); #Khởi tạo 1 class

$dongVat->setName('Con Chó'); #Cách gọi vào 1 methods của 1 class 
#echo $dongVat->show(); #Gọi 1 function trong class

echo $dongVat->name; #Gọi 1 thuộc tính trong class
echo $dongVat->color; #Gọi 1 thuộc tính trong class

#$dongVat->setName('Con Mèo'); #Cách gọi vào 1 methods của 1 class 
#echo $dongVat->getName();

/*
    Tạo ra lớp Trái Cây
    Truyền vào tên, trọng lượng, số tiền
    Nếu trọng lượng > 1kg => số tiền * 10%
    Ngược lại thì xuất đúng giá

    trả về kết quả tên trọng lượng và giá tiền 
    Def: 1000 => 1kg
*/