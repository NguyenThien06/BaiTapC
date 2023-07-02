<?php
$filename = 'data.txt';
$data = [];
$fp = fopen($filename, 'r');

while (!feof($fp)) {
    $line = explode("|", trim(fgets($fp)));

    $data[] = $line;
}

fclose($fp);

$logname = date("Y_m_d", time()) . '.txt';
$date = date('Y-m-d H:i:s');

// EDIT
if (isset($_GET['edit']) && isset($_GET['id'])) {
    if($_GET['edit'] == 1) {
        $lf = fopen($logname, 'a');
        fwrite($lf, $date . " vua sua id = " . $_GET['id'] . "\r\n");
        fclose($lf);
    }
}

// DELETE
if (isset($_GET['delete']) && isset($_GET['id'])) {
    if ($_GET['delete'] == 1) {
        //Ghi lai file data.txt (xoa dong vua chon)
        $fp = fopen($filename, 'w'); 
        $line = [];

        foreach ($data as $key => $value) { 
            if ($value[0] == $_GET['id']) {
                unset($data[$key]);
                continue;
            }
            $line[] = implode('|', $value);
        }

        $text = implode("\r\n", $line);
        fwrite($fp, $text);
        fclose($fp);
        //Ghi log
        $lf = fopen($logname, 'a');
        fwrite($lf, $date . " vua xoa id = " . $_GET['id'] . "\r\n");
        fclose($lf);
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
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
                    <a class='btn btn-warning' href="?edit=1&id=<?= $value[0] ?>">edit</a>
                    <a class='btn btn-danger' href="?delete=1&id=<?= $value[0] ?>">delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>