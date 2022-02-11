<?php

namespace App\Controllers;

use App\Helpers\Helper as HelpersHelper;
use Core\Controller;
use App\Models\Menu;
use Core\Helper;
use App\Models\Product;

class MenuController extends Controller
{
    protected $menuModel;
    protected $productModel;

    public function __construct()
    {
        $this->menuModel = new Menu();
        $this->productModel = new Product();
    }

    public function index($slug = '', $id = 0)
    {
        $menu = $this->menuModel->show($id);
        if (is_null($menu)) {
            return Helper::redirect('/');
        }

        #Get Child ID Menus
        $menuIds = $this->getChildIds($id);

        #Page
        $page = isset($_GET['page']) && $_GET['page'] > 1 ? (int) $_GET['page'] : 1;
        $limit = 20;
        $offset = ($page - 1) * $limit;
        $numRow = $this->productModel->numRows($menuIds);
        $sumPage = ceil($numRow / $limit); #Tính ra số trang và làm tròn

        #Get Products
        $products = $this->productModel->getByMenu($menuIds, $limit, $offset);
        
        return $this->loadView('main', [
            'title'     =>  Helper::decodeSafe($menu['name']),
            'menu'      => $menu,
            'products'  => $products,
            'template'  => 'menu',
            'sumPage'   => $sumPage,
            'page'      => $page
        ]);
    }

    #Lấy ID thuộc danh mục con
    protected function getChildIds($id)
    {
        $menuIds = $id;

        $menus = $this->menuModel->getChild($id);
        if ($menus->num_rows > 0) {
            while($row = $menus->fetch_assoc()) {
                $menuIds .= ", " . $row['id'];
            }
        }

        return $menuIds;
    }
}