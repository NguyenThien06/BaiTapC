<?php

namespace App\Controllers;

use Core\Helper;
use Core\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function index($slug = '', $id = '')
    {
        $product = $this->model->show($id, 1);
        if (is_null($product)) {
            return Helper::redirect('/');
        }
       
        return $this->loadView('main', [
            'title' => Helper::decodeSafe($product['name']),
            'template' => 'product/content',
            'product'  => $product,
            'description' => $product['description'],
            'image' => $product['file'],
            'sliders' => $this->model->getSlider($id),
            'products_more' => $this->model->getMore($id, $product['menu_id'])
        ]);
    }
}