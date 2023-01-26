<?php

namespace app\controllers;

use app\models\HomeModel;
use core\Application;
use core\Controller;

class HomeController extends Controller
{
    public function index(): string
    {
        $data = ['title' => 'Accueil'];

        // example for inserting other views in a layout
//        $homeModel = new HomeModel();
//        $data['description'] = $homeModel->getViewHtml('description', $data);
        $data['head'] = '<link href="'.BASE_URL_ASSETS.'css/slider.css" rel="stylesheet" type="text/css">';
        $data['head'] .= '<link href="https://unpkg.com/swiper@7/swiper-bundle.min.css" rel="stylesheet" type="text/css">';

        return $this->render('home', $data);
    }

    public function faq(): string
    {
        $homeModel = new HomeModel();
        $data = [
            'title' => 'FAQ',
            'head' => '<link href="'.BASE_URL_ASSETS.'css/accordion.css" rel="stylesheet" type="text/css">',
            'faq' => $homeModel->getFAQ(),
        ];

        return $this->render('faq', $data);
    }

    public function contact(): string
    {
        $data = ['title' => 'Contact'];
        if ('post' === Application::$app->router->getMethod()) {
            $email = $this->validatePost('email', FILTER_VALIDATE_EMAIL);
            $name = $this->validatePost('name');
            $subject = $this->validatePost('subject');
            $message = $this->validatePost('message');
            if (!$email) {
                $data['error'] = 'Email invalid';
            } elseif (!$subject) {
                $data['error'] = 'Subject invalid';
            } elseif (!$name) {
                $data['error'] = 'Name invalid';
            } elseif (!$message) {
                $data['error'] = 'Message invalid';
            } else {
                $homeModel = new HomeModel();
                if ($homeModel->sendContactEmail($email, $name, $subject, $message)) {
                    $data['success'] = 'Message sent';
                    Application::$app->router->redirect('/');
                } else {
                    $data['error'] = 'Message not sent';
                }
            }
            $data['name'] = $name;
            $data['email'] = $email;
            $data['subject'] = $subject;
            $data['message'] = $message;
        }

        return $this->render('contact', $data);
    }

    public function cgu(): string
    {
        $data = ['title' => 'Conditions générales d\'utilisations'];

        return $this->render('cgu', $data);
    }

    public function empreinteCarbone(): string
    {
        $data = ['title' => 'Empreinte Carbone'];

        return $this->render('empreinteCarbone', $data);
    }

    public function qcm(): string
    {
        $data = ['title' => 'QCM'];

        return $this->render('qcm', $data);
    }

    public function funFacts(): string
    {
        $data = ['title' => 'Fun Facts'];

        return $this->render('funFacts', $data);
    }
}
