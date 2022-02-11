<?php

namespace App\Controllers;

use Core\Controller;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;

class CacheController extends Controller
{
    public function index()
    {
        $cache = new FilesystemAdapter();

        $value = $cache->get('my_cache_key_1', function (ItemInterface $item) {
            $item->expiresAfter(10);

            $computedValue = 'ABC 1245';
        
            return $computedValue;
        });

        echo $value;

    }
}