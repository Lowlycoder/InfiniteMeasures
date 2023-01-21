<?php

namespace core;

/** Global controller that other controllers extend. */
class Controller
{
    public string $layout = 'main';

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []): string
    {
        return Application::$app->view->renderView($view, $params);
    }

    protected function validatePost(string $var_name, int $filter = FILTER_SANITIZE_STRING): string|false
    {
        $var_name = filter_input(INPUT_POST, $var_name, $filter);

        return empty($var_name) ? false : $var_name;
    }

//    public function checkAdmin(): bool
//    {
//        return Application::$app->session->get('admin');
//    }
}
