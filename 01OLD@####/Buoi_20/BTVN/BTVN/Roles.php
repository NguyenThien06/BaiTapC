<?php

class Roles extends Controller
{
    protected function access( int $permission = 1)
    {
        if ($permission === 1) return $this->user();

        if ($permission === 2) return $this->supperUser();

        if ($permission === 3) return $this->admin();

        return false; 
    }

    protected function user()
    {
        return $this->read();
    }

    protected function supperUser()
    {
        $content = $this->read();
        $content .= $this->edit();

        return $content;
    }

    protected function admin()
    {
        $content = $this->read();
        $content .= $this->edit();
        $content .= $this->delete();

       return $content;
    }
}