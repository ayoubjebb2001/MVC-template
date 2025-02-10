<?php

namespace App\core;

class Request
{
    public function getPath(): string{
        $path = $_SERVER['REQUEST_URI']??'/';
        $pos = strrpos($path, '?');
        echo "<pre>";
        var_dump($pos);
        echo "</pre>";
    }

    public function getMethod(): string{

    }
}