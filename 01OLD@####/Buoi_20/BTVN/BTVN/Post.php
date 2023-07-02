<?php

class Post extends Roles
{
    protected $permission;
    public function __construct($permission)
    {
        $this->permission = $permission;
    }

    public function start()
    {
        return $this->access($this->permission);
    }
}