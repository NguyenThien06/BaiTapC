<?php
    #Code PHP

    #Trả về String
    // ABC

    $url = 'http://php-08-03.vtest';

    $name = 'Nguyễn Văn A';
    $NAME = 'Nguyễn Văn B';

    echo "Tên của Bạn là: " . $name . "  18 tuổi";

    echo '<hr>';

    echo 'Tên của Bạn là: $NAME 18 tuổi';

    echo 'Hoàn thành ' . $name;

    function test()
    {
        global $name, $url, $abc;

        $abc = '123';

        echo $abc;
    }

    test();

    print '<hr>';

    echo $abc;

    $soA = 11.2;
    $soB = 11.8;

    print '<hr>';

    echo $soA + $soB;

    print '<hr>';
    #Debug dữ liệu
    // var_dump($abc);
    // die();

    $array = array("Số 1", "Số 2", "Số 3", "Số 1", "Số 2", "Số 3", "Số 1", "Số 2", "Số 3", "Số 1", "Số 2", "Số 3", );
    
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
    die();

?>