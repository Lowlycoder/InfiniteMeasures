<?php

namespace app\controllers;

use app\models\AuthModel;
use core\Application;
use core\Controller;
use JetBrains\PhpStorm\NoReturn;

class AuthController extends Controller
{
    public function login(): string|null
    {
        $data = ['title' => 'Login'];
        if ('post' === Application::$app->router->getMethod()) {
            $email = $this->validatePost('email', FILTER_VALIDATE_EMAIL);
            $password = $this->validatePost('password');

            $authModel = new AuthModel();
            $data['error'] = $authModel->login(['email' => $email, 'password' => $password]);
            if (!$data['error']) {
                Application::$app->router->redirect('/dashboard');
            }
            $data['email'] = $email;
        }

        return $this->render('login', $data);
    }

    public function adminLogin(): string|null
    {
        $data = ['title' => 'Login'];
        if ('post' === Application::$app->router->getMethod()) {
            $email = $this->validatePost('email', FILTER_VALIDATE_EMAIL);
            $password = $this->validatePost('password');

            $authModel = new AuthModel();
//            @todo change to admin table
            $data['error'] = $authModel->login(['email' => $email, 'password' => $password]);
            if (!$data['error']) {
                Application::$app->router->redirect('/admin');
            }
            $data['email'] = $email;
        }

        return $this->render('login', $data);
    }

    public function register(): string|null
    {
        $data = ['title' => 'Signup'];
        if ('post' === Application::$app->router->getMethod()) {
            $nom = $this->validatePost('nom');
            $prenom = $this->validatePost('prenom');
            $email = $this->validatePost('email', FILTER_VALIDATE_EMAIL);
            $password = $this->validatePost('password');
            if (!$nom) {
                $data['error'] = 'Nom invalid';
            } elseif (!$prenom) {
                $data['error'] = 'Prénom invalid';
            } elseif (!$email) {
                $data['error'] = 'Email invalid';
            } elseif (!$password || strlen($password) < 10) {
                $data['error'] = 'Password invalid';
            } else {
                $AuthModel = new AuthModel();
                $data['error'] = $AuthModel->register(
                    [
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'email' => $email,
                        'passwordHash' => $password,
                        'lastConnection' => '',
                    ]
                );
                if (!$data['error']) {
                    Application::$app->router->redirect('/login');
                }
            }
            $data['nom'] = $nom;
            $data['prenom'] = $prenom;
            $data['email'] = $email;
        }

        return $this->render('register', $data);
    }

    public function reset(): string|null
    {
        $data = ['title' => 'Réinitialisation de mot de passe'];
        if ('post' === Application::$app->router->getMethod()) {
            $email = $this->validatePost('email', FILTER_VALIDATE_EMAIL);

            $authModel = new AuthModel();
            $data['error'] = $authModel->reset($email);

            if (!$data['error']) {
                Application::$app->router->redirect('/');
            }
            $data['email'] = $email;
        }

        return $this->render('reset', $data);
    }

    public function resetPassword(): string|null
    {
        $data = ['title' => 'Nouveau mot de passe'];
        if ('post' === Application::$app->router->getMethod()) {
            $token = $this->validatePost('token');
            $password = $this->validatePost('password');

            $authModel = new AuthModel();
            $data['error'] = $authModel->resetPassword(['token' => $token, 'password' => $password]);

            if (!$data['error']) {
                Application::$app->router->redirect('/login');
            }
        }

        return $this->render('resetPassword', $data);
    }

    #[NoReturn]
    public function logout(): void
    {
        $AuthModel = new AuthModel();
        $AuthModel->logout();
        Application::$app->router->redirect('/');
    }
}
