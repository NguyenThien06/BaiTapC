<?php
     if(isset($_POST['hinhdang'])){
        // header("location:hinhchunhat.php")
        echo $hinhDang = $_POST['hinhdang'];
        # tại sao ko dùng đc toán tử 3 ngôi 
        if($hinhDang == 1) {
            header('location: hinhchunhat.php');
           
        }

        if($hinhDang == 2) {
            header('location: hinhvuong.php');
        }

     }

?>