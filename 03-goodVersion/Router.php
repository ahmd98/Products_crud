<?php

namespace app;

class Router
{
    public $getRoutes = [];
    public $postRoutes = [];
    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }
    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }
    public function resolve()
    {
        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }
        if ($fn) {
            call_user_func($fn, $this);
        } else {
            echo "Page not found";
        }

    }
    public function renderView($view)
    {
        include_once __DIR__ . "/views/$view.php";

    }
}
