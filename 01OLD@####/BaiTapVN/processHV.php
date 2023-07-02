<?php
    require_once 'mode.php'

    $hv = new model();

    $chieudai = (isset($_POST['chieudai'])? $_POST['chieudai'] : '');
    
    $chuvi = $hv->chuvi($chieudai, $chieudai);
    $dientich = $hv->dientich($chieudai, $chieurong);
    echo 'Diện tích hình vuông là '. $dientich;
    echo 'Chu vi hình vuông là '. $chuvi;
 ?>
?>