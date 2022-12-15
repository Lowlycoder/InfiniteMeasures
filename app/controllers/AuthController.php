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
        $data = ['title' => 'Login'];
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
        $data = ['title' => 'Signup'];
        return $this->render('signup', $data);
    }

    public function reset(): void
    {
    }
}
