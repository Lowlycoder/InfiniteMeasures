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

    public function faq(): string
    {
        $homeModel = new HomeModel();
        $data = ['title' => 'FAQ',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/accordion.css' rel='stylesheet' type='text/css'>",
            'faq' => $homeModel->getFAQ()];

        return $this->render('faq', $data);
    }
}
