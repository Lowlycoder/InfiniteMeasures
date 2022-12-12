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

//    /**
//     * @param string $viewFile view file path in app/views
//     * @param $data
//     * @return void
//     */
//    public function loadView(string $viewFile, $data): void
//    {
//        extract($data); // convert array key/values to individual php variables for the view
//        require_once __DIR__ . "/../app/views/$viewFile.php";
//    }
}
