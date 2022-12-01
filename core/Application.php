<?php

namespace core;

use core\Controller;
use core\Router;
use core\View;

class Application
{
    public static Application $app;
    public Router $router;
    public View $view;
    public ?Controller $controller = null;

    public function __construct() // string $dirname, array $config
    {
        self::$app = $this;
        $this->router = new Router([
            'default_controller' => 'home',
            'default_method' => 'index'
        ]);
        $this->view = new View();
    }

    public function run(): void
    {
        echo $this->router->resolve();
    }
}