<?php

namespace App\Models;

use Core\Model;

class Menu extends Model
{
    protected $table = 'menus';

    public function get()
    {
        return $this->query("SELECT id, name from $this->table where active = 1 && parent_id = 0 order by order_by desc");
    }

    public function show($id)
    {
        return $this->fetch("SELECT * from $this->table where active = 1 && id = $id ");
    }

    public function getChild($id)
    {
        return $this->query("SELECT id from $this->table where active = 1 && parent_id = $id ");
    }
}