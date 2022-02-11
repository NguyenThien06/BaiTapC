<?php

namespace App\Models\Admin;

use Core\Model;

class Slider extends Model
{
    protected $table = 'sliders';

    public function create($data)
    {
        return $this->insertArray($data, $this->table);
    }
}