<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Slider;
use App\Models\Menu;
use App\Models\Product;

class MainController extends Controller
{
    protected $sliderModel;
    protected $menuModel;
    protected $productModel;

    public function __construct()
    {
        $this->sliderModel = new Slider(); 
        $this->menuModel = new Menu();   
        $this->productModel = new Product();
    }

    public function index()
    {
        $data = [
            'title'     => 'Trang Chủ Demo MVC Khoa Phạm',
            'template'  => 'home',
            'sliders'   => $this->sliderModel->get(),
            'menus'     => $this->menuModel->get(),
            'products'  => $this->productModel->get()
        ];

        return $this->loadView('main', $data);
    }

    public function loadProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $page = isset($_POST['page']) ? (int)$_POST['page'] : 0;

            $result = $this->productModel->get($page);

            if (!is_null($result)) {
                return json([
                    'error' => false,
                    'data' => $result 
                ]);
            }

            return json(['error' => true, 'data' => '' ]);
        }

        return json(['error' => true, 'data' => '' ]);
    }
    
    public function loadProductShow()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

            $result = $this->productModel->show($id);

            if (!is_null($result)) {
                return json([
                    'error' => false,
                    'data' => $result 
                ]);
            }

            return json(['error' => true, 'data' => '' ]);
        }

        return json(['error' => true, 'data' => '' ]);
    }
}