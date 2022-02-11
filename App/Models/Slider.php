<?php

namespace App\Models;

use Core\Model;

class Slider extends Model
{
    protected $table = 'sliders';

    public function get()
    {
        return $this->query("SELECT * from $this->table where active = 1 order by sort_by desc ");
    }
}