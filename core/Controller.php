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

//    public function checkAdmin(): bool
//    {
//        if (Application::$app->session->get('admin') === true) {
//            return true;
//        }
//        return false;
//    }
}
