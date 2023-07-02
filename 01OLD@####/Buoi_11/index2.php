<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

// echo date("d-m-Y H:i:s");
// echo '<hr >';

// $dayNumber = [
//     'Monday' => 2,
//     'Wednesday' => 4
// ];

// $key = date('l');

// echo $dayNumber[$key];

// echo '<hr >';

#Ngày: 01/03/2020 => 30/03/2021
#Tạo ra 1 trường timestamp
#
// $dateOld = "01-04-2020";

// echo $dateOldToTime = strtotime($dateOld);
// echo '<hr>';
// echo strtotime("30-03-2020");echo '<hr>';

// $dateNew = strtotime("+ 30 day", $dateOldToTime);

// echo date("d-m-Y", $dateNew);


if (isset($_POST['send'])) {
    $date = $_POST['date'];
    $dateTimeInt = strtotime($date);
    
    echo 'Ngày trong tuần: ' . date("l", $dateTimeInt);
    
    $dateNow = date("d-m-Y H:i:s");
    $dateNowInt = strtotime($dateNow);

    $timeEx = $dateNowInt - $dateTimeInt;
    $timeEx = abs($timeEx);

    $day = $timeEx / 86400;
    echo 'Số ngày chênh lệch: ' . $day;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Bài Tập-->
    <hr>
    Tạo 1 form với type = date => chọn ngẫu nhiên
    Xuất ra ngày chọn là thứ trong tuần.
    Tính thời gian hiện tại so với thời gian bạn chọn cách nhau bao nhiêu ngày
    <hr>
    <form action="" method="post">
        <input type="date" name="date">
        <br />
        <input type="submit" name="send" value="Xem Kết Quả">
    </form>




    <?php
        include "header.php";
    ?>


    <!-- <div style="border: 1px solid; width: 100px; height: 100px; text-align: center;border-radius: 50%"> -->
        <!-- <p data-time="<?=time()?>"><?=date("H:i:s")?></p> -->

        <!-- <p id="time" data-time="<?=time()?>"><?=date("H:i:s")?></p>

    </div> -->

    <?php
        include "footer.php";
    ?>
   
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script>
        // var date = new Date();
        // var timeNow = date.getMonth() + '/' + date.getDay() + '/' + date.getFullYear();
        // console.log(timeNow)
       // var timeInt = toTimestamp();

        //02/13/2009 23:31:30

        // function toTimestamp(strDate){
        //     var datum = Date.parse(strDate);
        //     return datum / 1000;
        // }
    </script>

</body>
</html>