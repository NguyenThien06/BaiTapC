<?php
    header('Content-type: application/json');
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $chieudai = (float) $_POST['chieudai'];
        $chieurong = (float) $_POST['chieurong'];
        $hinhdang = (int) $_POST['hinhdang'];

        if ($hinhdang == 1) { #Hình chữ nhật
            $dientichHCN = dientichHCN($chieudai, $chieurong);
            $chuviHCN = chuviHCN($chieudai, $chieurong);

            echo json_encode([
                'dientich' => $dientichHCN,
                'chuvi'  => $chuviHCN
            ]);
            die();
        }

        if ($hinhdang == 2) { #Hình vuông
            $dientichHV = dientichHV($chieudai);
            $chuviHV = chuviHV($chieudai);

            echo json_encode([
                'dientich' => $dientichHV,
                'chuvi'  => $chuviHV
            ]);
            die();
        }
    }


    function dientichHCN($chieudai = 0, $chieurong = 0)
    {
        return $chieudai * $chieurong;
    }

    function chuviHCN($chieudai = 0, $chieurong = 0)
    {
        return ($chieudai + $chieurong) * 2;
    }

    function dientichHV($chieudai = 0)
    {
        return $chieudai * $chieudai;
    }

    function chuviHV($chieudai = 0)
    {
        return $chieudai * 4;
    }