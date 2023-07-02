<?php
#composer dump-autoload

include 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Models\UserModel;
use App\Controllers\ProductController;

#$product = new ProductController();


$home = new HomeController();
echo $home->index();

// echo '<hr>';

// $model = new UserModel;
// echo $model->show();