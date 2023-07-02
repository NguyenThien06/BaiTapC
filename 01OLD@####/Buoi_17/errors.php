<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - <?=$ex->getCode()?></title>
</head>
<body>
    <h1>Error - <?=$ex->getCode()?></h1>
    <p><?=$ex->getMessage()?></p>
</body>
</html>