<?php

namespace app\controllers;

use app\models\AuthModel;
use core\Application;
use core\Controller;
use core\Router;

/** Handle functionality for home page. */
class AuthController extends Controller
{
    public function login(): string|null
    {
        $data = ['title' => 'Login',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/auth.css' rel='stylesheet' type='text/css'>"];
        if (Application::$app->router->getMethod() === 'post') {
            echo "checking login";
//            $loginForm->loadData($request->getBody());
//            if ($loginForm->validate() && $loginForm->login()) {
//                Application::$app->router->redirect('/');
//                return null;
//            }
        }
        return $this->render('login', $data);
    }

    public function register(): string
    {
        $data = ['title' => 'Signup',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/auth.css' rel='stylesheet' type='text/css'>"];
        return $this->render('register', $data);
    }

    public function reset(): void
    {
    }
}
