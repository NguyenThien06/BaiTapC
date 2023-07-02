<?php
function writeLog($content = '')
{
	 //Tạo file log
    date_default_timezone_set('Asia/Ho_Chi_Minh');   
    $nameFile = date('Y-m-d') . '.txt'; //tên file: năm tháng ngày
	
	$fLog = fopen($nameFile, 'a+');
	$content = date('y-m-d H:i:s') . ": " .$content. " \n";
	fwrite($fLog, $content);
	fclose($fLog);
}


#Lấy dữ liệu file data.txt
$fp = fopen('data.txt', 'a+');

$array = [];
while (! feof($fp)) {
    $array[] = explode("|", fgets($fp));
}


 
    
    #Nhấn 1 trong hai nút thì tạo file log
    //if(isset($_GET['edit']) || isset($_GET['delete'])){
    //    $fLog = fopen($nameFile, 'a+');
    //}

    //SỬA
    if(isset($_GET['edit'])){       
       # $content = date('y-m-d H:i:s') . ": Vừa sửa ID: " . $_GET['id'] . "\n";
       # fwrite($fLog, $content);
       # fclose($fLog);
	   
	   $content = "Vừa sửa ID: " . $_GET['id'];
       writeLog($content);
        
    }

    //XÓA
    if(isset($_GET['delete'])){
       #$content = date('y-m-d H:i:s') . ": Vừa xóa ID: " . $_GET['id'] . "\n";
       # fwrite($fLog, $content);
       # fclose($fLog);
	   
	    $content = "Vừa xóa ID: " . $_GET['id'];
		writeLog($content);
		
		

        // Xóa mảng
        $id = $_GET['id'];
        #Tìm phần tử chứa số id đã GET trong mảng
        foreach($array as $key => $value){
            if($value[0] == $id){
                unset($array[$key]);
                    break;
            }            
        }
        //ghi lại mảng đã xóa
		$htmlNew = '';
        foreach($array as $key => $value){
            $content = implode("|", $value);
			$htmlNew .= trim($content) . "\n";
        }
		

		$fDel = fopen("data.txt", 'w');
		fwrite($fDel, trim($htmlNew));
        fclose($fDel);
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Link</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                    foreach ($array as $key => $value) { 
                        #Kiểm tra rỗng sau delete dữ liệu
                        if($value[0] != null && $value[0] != null){ 
            ?>
                <tr>
                   <td><?= $value[0] ?></td>
                   <td><?= $value[1] ?></td>
                   <td><?= $value[2] ?></td>
                   <td>
                        <a href="?edit=1&id=<?= $value[0]?>">Sửa</a>
                        <a href="?delete=1&id=<?=$value[0]?>">Xóa</a>
                   </td>
                </tr>
            <?php }
                    }
                
            ?>
        </tbody>
    </table>
            </div>
        </div>
    
    </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>