<?php
//HAM
function docFile($filename) {
    $fp = fopen($filename, 'r');
    $data = [];
    while (!feof($fp)) {
        $line = explode("|", trim(fgets($fp)));
        $data[] = $line;
    }
    fclose($fp);
    return $data;
}

function ghiFile($filename, $text, $mode = 'a') {
    $fp = fopen($filename, $mode);
    fwrite($fp, $text);
    fclose($fp);
}

$filename = 'data.txt';
$data = docFile($filename);
if($data[0][0] == "") {
    unset($data[0]);
}
// EDIT
if (isset($_GET['edit']) && isset($_GET['id']) && isset($_GET['title']) && isset($_GET['link'])) {
    if($_GET['edit'] == 1) {
        //Ghi lai file sau khi edit
        $line = [];

        foreach ($data as $key => $value) { 
            if ($value[0] == $_GET['id']) {
                $value[1] = $_GET['title'];
                $value[2] = $_GET['link'];
                $data[$key] = $value;
            }
            $line[] = implode('|', $value);
        }
        $text = implode("\r\n", $line);
        ghiFile($filename, $text, 'w');

        //Ghi log
        $text = date("Y-m-d H:i:s") . ' vua sua id = ' . $_GET['id'] . "\r\n";
        ghiFile(date("Y_m_d") . '.txt', $text);
    }
}

// DELETE
if (isset($_GET['delete']) && isset($_GET['id'])) {
    if ($_GET['delete'] == 1) {
        //Ghi lai file data.txt (xoa dong vua chon)
        $line = [];

        foreach ($data as $key => $value) { 
            if ($value[0] == $_GET['id']) {
                unset($data[$key]);
                continue;
            }
            $line[] = implode('|', $value);
        }
        $text = implode("\r\n", $line);
        ghiFile($filename, $text, 'w');

        //Ghi log
        $text = date("Y-m-d H:i:s") . ' vua xoa id = ' . $_GET['id'] . "\r\n";
        ghiFile(date("Y_m_d") . '.txt', $text);
    }
}

//ADD
// if (isset($_GET['add']) && isset($_GET['id']) && isset($_GET['title']) && isset($_GET['link'])) {
//     if($_GET['add'] == 1) {
//         $data[] = [ 
//             $_GET['id'],
//             $_GET['title'],
//             $_GET['link'],
//         ];
//         $line = [];

//         foreach ($data as $key => $value) { 
//             $line[] = implode('|', $value);
//         }
//         $text = implode("\r\n", $line);
//         ghiFile($filename, $text, 'w');
//     }
// }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>
<style>
#edit {
    position: fixed;
    width:100%;
    height:100vh;
    margin: 0;
    padding: 0; 
    justify-content: center;
    background: #e6e6e6;
}
#edit .close {
    width: 40px;
    height: 40px;
    border: solid 2px black;
    text-align: center;
    color: black;
}
#edit .close:hover {
    cursor: pointer;
    width: 40px;
    height: 40px;
    border: solid 2px red;
    color: red;
    background: white;
}
#edit .card {
    width: 300px;
    height:300px;
    margin:100px auto;
}
#edit .card  .card-head{
    height:50px;
    font-size:20px;
    line-height:40px;
    text-align: center;
    background: #0a0a0a;
    color: white;
}
#edit form input[type=text] {
    border:none;
    font-size: 18px;
}
</style>
    
    <div id="edit">
    <div class="close">x</div>
        <div class="card">
            <div class="card-head">EDIT</div>
            <div class="card-body">
                <form class="form" method= "GET">
                    <div class="form-group">
                        <label>ID: </label>
                        <input type="text" name="id" id="edit_id" readonly/>
                    </div>
                    <div class="form-group">
                        <label>TITLE: </label>
                        <input type="text" name="title" id="edit_title"/>
                    </div>
                    <div class="form-group">
                        <label>LINK: </label>
                        <input type="text" name="link" id="edit_link"/>
                    </div>
                    <button class="btn btn-dark" type="submit" name="edit" value=1>Done</button>
                </form>
            </div>
        </div>
    </div>
    <!-- <button class="btn btn-dark m-1" onclick="add()"><i class="fas fa-plus"></i></button> -->
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>LINK</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $key => $value) { ?>
            <tr>
                <td><?= $value[0] ?></td>
                <td><?= $value[1] ?></td>
                <td><?= $value[2] ?></td>
                <td>
                    <a class='btn btn-dark' onclick="edit('<?= $value[0] ?>','<?= $value[1]?>','<?= $value[2]?>')"><i class="fas fa-edit"></i></a>
                    <a class='btn btn-dark' href="?delete=1&id=<?= $value[0] ?>"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#edit').hide();
            $('#edit .close').click(function(){
                $('#edit').slideToggle(100);
            });
        });
        function edit(id, title, link) {
            $('#edit').slideToggle(100);
            $('#edit .form').attr('action','?edit=1&id=' + id);
            $('#edit .card-head').html("EDIT");
            $('#edit_id').val(id);
            $('#edit_title').val(title);
            $('#edit_link').val(link);
        }
        // function add() {
        //     $('#edit').slideToggle(100);
        //     $('#edit .form').attr('action','?add=1');
        //     $('#edit .card-head').html("NEW");
        //     $('#edit_id').removeAttr("readonly");
        //     $('#edit_id').val("");
        //     $('#edit_title').val("");
        //     $('#edit_link').val("");
        //     $('#edit .form button').attr('name', 'add');
        // }
    </script>
</body>
</html>