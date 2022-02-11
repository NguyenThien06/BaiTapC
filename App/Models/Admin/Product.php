<?php

namespace App\Models\Admin;

use Core\Model;

class Product extends Model
{
    protected $table = 'products';

    public function insert($data = [])
    {
        return $this->insertArray($data, $this->table);
    }

    public function get($limit, $offset)
    {
        $sql = "SELECT $this->table.*, menus.name as menu_name 
                FROM $this->table JOIN menus on $this->table.menu_id = menus.id 
                order by $this->table.id desc limit $limit offset $offset";
        
        return $this->query($sql);
    }

    public function numRows()
    {
        $result = $this->query("select id from $this->table");

        return $result->num_rows;
    }

    public function show($id)
    {
        return $this->fetch("SELECT * from $this->table where id = $id ");
    }

    public function update($data, $id)
    {
        return $this->updateArray($data, $this->table, $id);
    }

    public function delete($product, $id)
    {
        #Xóa File từ Public
        $link = _PUBLIC_PATH_ .'/'. $product['file'];

        if (file_exists($link)) {
            unlink($link);
        }

        return $this->query("DELETE FROM $this->table where id = $id ");
    }
}