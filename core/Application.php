<?php

namespace core;

use app\service\Mailer;

class Application
{
    public static Application $app;
    public Router $router;
    public View $view;
    public ?Controller $controller = null;
    public Database $db;
    public Mailer $mailer;

    public function __construct($dbConfig) // string $dirname, array $config
    {
        self::$app = $this;
        $this->router = new Router();
        $this->view = new View();
        $this->db = new Database($dbConfig);
        $this->mailer = new Mailer();
    }

    public function run(): void
    {
        echo $this->router->resolve();
    }
}
