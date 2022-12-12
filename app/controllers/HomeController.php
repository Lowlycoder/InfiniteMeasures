<?php

namespace app\controllers;

use core\Controller;
use app\models\HomeModel;

/** Handle functionality for home page. */
class HomeController extends Controller
{
    public function index(): string
    {
        $homeModel = new HomeModel();
        $data = ['title' => 'home',
            'page' => $homeModel->getPageText()];
        $data['description_html'] = $homeModel->getViewHtml('html_description', $data);
        return $this->render('home', $data);
    }

    public function info(): string
    {
        $homeModel = new HomeModel();
        $data = ['title' => 'info',
            'page' => $homeModel->getPageText(),
            'description_html' => 'description'
        ];
        return $this->render('home', $data);
    }
}
