<?php

namespace App\Models;

use Core\Model;

class Product extends Model
{
    protected $table = 'products';
    const LIMIT = 12;

    public function get($page = null)
    {
        $sql = "SELECT id, name, price, price_sale, file 
                from $this->table where active = 1 order by id desc limit " . self::LIMIT . " ";

        if ($page !== NULL) {
            $offset = $page * self::LIMIT;
            $sql .= " offset $offset ";

            return $this->fetchArray($sql);
        } 

        return $this->query($sql);
    }

    public function show($id, $join = 0)
    {
        $sql = "SELECT * from $this->table where active = 1 && id = $id ";

        if ($join == 1) {
            $sql = "SELECT $this->table.*, menus.name as menuName FROM $this->table  
                join menus on menus.id = $this->table.menu_id 
                where $this->table.id = $id && $this->table.active = 1 ";
        }

        return $this->fetch($sql);
    }

    public function numRows($menuIds)
    {
        $sql = "SELECT id from $this->table where active = 1 && menu_id IN ($menuIds) ";
        $result = $this->query($sql);

        return $result->num_rows;
    }

    public function getByMenu($menuIds, $limit, $offset)
    {
        $sql = "SELECT id, name, price, price_sale, file 
                from $this->table where active = 1 && menu_id IN ($menuIds) 
                order by id desc limit $limit offset $offset ";

        return $this->query($sql);
    }

    public function getSlider($id)
    {
        return $this->query("SELECT * FROM product_slider where product_id = $id ");
    }

    public function getMore($id, $menuId)
    {
        $sql = "SELECT id, name, price, price_sale, file 
                from $this->table where active = 1 && menu_id = $menuId && id != $id 
                order by id desc limit 8";

        return $this->query($sql);
    }

    public function getByCart($productsId)
    {
        $sql = "SELECT id, name, price, price_sale, file 
            from $this->table where active = 1 && id IN ($productsId)";

        return $this->query($sql);
    }
}