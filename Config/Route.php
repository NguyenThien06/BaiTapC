<?php
#ROUTE MVC

$routes['service/test'] = 'App\Controllers\DemoController@index';


#----------------------API--------------------------#
$routes['api/user/login'] = 'App\Controllers\Api\LoginController@index';
$routes['api/menu/list'] = 'App\Controllers\Api\MenuController@index';
$routes['api/menu/add'] = 'App\Controllers\Api\MenuController@add';
$routes['api/menu/update'] = 'App\Controllers\Api\MenuController@update';

#----------------------PUBLIC--------------------------#
$routes['test-cache'] = 'App\Controllers\CacheController@index';


$routes['services/product'] = 'App\Controllers\MainController@loadProduct';
$routes['services/product-show'] = 'App\Controllers\MainController@loadProductShow';

#Carts
$routes['carts/add'] = 'App\Controllers\CartController@add';
$routes['carts'] = 'App\Controllers\CartController@index';
$routes['carts/update'] = 'App\Controllers\CartController@update';
$routes['carts/delete/{id}'] = 'App\Controllers\CartController@remove';
$routes['carts/store'] = 'App\Controllers\CartController@store';


$routes['danh-muc/{slug}-id{id}.html'] = 'App\Controllers\MenuController@index';
$routes['san-pham/{slug}-id{id}.html'] = 'App\Controllers\ProductController@index';

#----------------------ADMIN---------------------------#
#Login
$routes['admin/login'] = 'App\Controllers\Admin\LoginController@index';
$routes['admin/user/login/store'] = 'App\Controllers\Admin\LoginController@store';

#Main Admin
$routes['admin'] = 'App\Controllers\Admin\MainController@index';
$routes['admin/main'] = 'App\Controllers\Admin\MainController@index';

#Menu
$routes['admin/menus/add'] = 'App\Controllers\Admin\MenuController@create';
$routes['admin/menus/store'] = 'App\Controllers\Admin\MenuController@store';
$routes['admin/menus/list'] = 'App\Controllers\Admin\MenuController@index';
$routes['admin/menus/edit/{id}'] = 'App\Controllers\Admin\MenuController@edit';
$routes['admin/menus/update/{id}'] = 'App\Controllers\Admin\MenuController@update';
$routes['admin/menus/delete'] = 'App\Controllers\Admin\MenuController@destroy';

#Upload File
$routes['admin/upload/add'] = 'App\Controllers\Admin\UploadController@store';

#Product
$routes['admin/products/add'] = 'App\Controllers\Admin\ProductController@create';
$routes['admin/products/store'] = 'App\Controllers\Admin\ProductController@store';
$routes['admin/products/list'] = 'App\Controllers\Admin\ProductController@index';
$routes['admin/products/edit/{id}'] = 'App\Controllers\Admin\ProductController@show';
$routes['admin/products/update/{id}'] = 'App\Controllers\Admin\ProductController@update';
$routes['admin/products/delete'] = 'App\Controllers\Admin\ProductController@destroy';

#Quy trình
/*
    - Tạo route để điều hướng 
    - Nội dung sẽ chạy vào Controller và nhận thông tin yêu cầu từ người dùng
    - Nếu liên quan đến DATA thì load file Models để truy vấn data
    - Có data hoặc yêu cầu => truyền qua views và hiển thị
*/

#Slider
$routes['admin/sliders/add'] = 'App\Controllers\Admin\SliderController@create';
$routes['admin/sliders/store'] = 'App\Controllers\Admin\SliderController@store';