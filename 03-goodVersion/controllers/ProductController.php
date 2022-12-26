<?php

namespace app\controllers;

use app\Router;

class ProductController
{
    public function index(Router $router)
    {
        return $router->renderView('products/index');
    }

    public function create()
    {
        echo "create page";
    }

    public function update()
    {
        echo "update page";
    }

    public function delete()
    {
        echo "delete page";
    }

}
