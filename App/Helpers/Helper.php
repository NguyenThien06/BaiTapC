<?php

namespace App\Helpers;

use App\Models\Product;
use Core\Model;
use Core\Helper as CoreHelper;

class Helper
{
    public static function menuShow($data, $parentId = 0, $symb = '')
    {
        $html = '';

        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $parentId) { #Lần 1 sẽ lấy tất cả Menu cha
                $html .='
                    <tr>
                        <td>' . $value['id'] . '</td>
                        <td>' . $symb . $value['name'] . '</td>
                        <td>' . $value['order_by'] . '</td>
                        <td>' . self::active($value['active']) . '</td>
                        <td>' . $value['updated_at'] . '</td>
                        <td><a href="/admin/menus/edit/' . $value['id']. '"><i class="far fa-edit"></i></a></td>
                        <td><a href="#" onclick="deleteRow(' . $value['id']. ', \'/admin/menus/delete\')"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                ';

                #Xóa danh mục đã lấy ra
                unset($data[$key]);

                $html .= self::menuShow($data, $value['id'], $symb . '|---');
            }
        }

        return $html;
    }

    public static function menuAll()
    {
        $model = new Model();
        
        $sql = "SELECT id, name, parent_id from menus where active = 1 order by order_by desc";
        $menus = $model->fetchArray($sql);

        return $menus;
    }

    public static function productsCart()
    {
        $model = new Product();
        
        $carts = isset($_SESSION['carts']) ? $_SESSION['carts'] : NULL;
        if (is_null($carts)) {
            return false;
        }

        #lấy ID sản phẩm từ giỏ hàng
        $productsId = array_keys($carts);
        $idProductString = implode(',', $productsId);

        return $model->getByCart($idProductString);
    }

    public static function menuPublic($data, $parentId = 0)
    {
        $html = '';
        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $parentId) {
                $html .= '
                        <li>
                            <a href="/danh-muc/'. CoreHelper::slug($value['name']) . '-id' . $value['id'] . '.html" 
                                title="' . $value['name'] . '">' . $value['name'] . '
                            </a>';

                if (self::isChild($data, $value['id'])) { #Kiểm tra xem có danh mục con hay không
                    $html .= '<ul class="sub-menu">';
                    $html .= self::menuPublic($data, $value['id']);
                    $html .= '</ul>';
                }

                $html .= '</li>';
            }
        }

        return $html;
    }

    public static function isChild($menus, $id = 0)
    {
        foreach ($menus as $menu) {
            if ($menu['parent_id'] == $id) {
                return true;
            }
        }

        return false;
    }

    public static function active($active = 0)
    {
        return $active == 0 
            ? '<button type="button" class="btn btn-block bg-gradient-danger btn-xs">Không Kích Hoạt</button>' 
            : '<button type="button" class="btn btn-block bg-gradient-success btn-xs">Kích Hoạt</button>';
    }

    public static function price($price = 0, $priceSale = 0)
    {
        #return number_format($priceSale, 0, ' ', '.') . '<sup>đ</sup>';
        
        if ($price != 0 && $priceSale != 0) $priceSale . '<sup>đ</sup>';

        if ($price != 0) return $price . '<sup>đ</sup>';

        return '<a href="/lien-he.html">Liên Hệ</a>';
    }

    public static function getFillter($array = [], $link = '')
    {
        if ($link == '') { #Nếu người dùng không truyền link
            # URI: /danh-muc/nuoc-hoa-nam-id12.html?page=1
            $link = explode('?', $_SERVER['REQUEST_URI']);
            $link = $link[0];
        }

        if (count($array) != 0 ) {
            $queryString = $_GET;

            #Xóa query default htacces
            unset($queryString['query']);

            #Gộp mảng
            $array = array_merge($queryString, $array);

            return $link . '?' . http_build_query($array);
        }

        return $link;
    }

    public static function randomStringGenerator($length = 6)  
    {  
        $randomString = "";  
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";  
        $len = strlen($characters);  

        for ($i = 0; $i < $length; $i++){  
            $index = rand(0, $len - 1);  
            $randomString = $randomString . $characters[$index];
        }  
    
        return $randomString;
    }  
}