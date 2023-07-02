<?php
  require_once 'mode.php';

  $hcn = new model();
   $chieudai = (isset($_POST['chieudai'])? $_POST['chieudai'] : '');
   $chieurong = (isset($_POST['chieurong'])? $_POST['chieurong'] : '');
   $chuvi = $hcn->chuvi($chieudai, $chieurong);
   $dientich = $hcn->dientich($chieudai, $chieurong);
   echo 'Diện tích hình chữ nhật là '. $dientich;
   echo 'Chu vi hình chữ nhật là '. $chuvi;
?>