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

    public function cgu(): string
    {
        $data = ['title'=> 'Conditions générales d\'utilisations',
        'head' => "<link href='" . BASE_URL_ASSETS . "css/qcm.css' rel='stylesheet' type='text/css'>"];
        return $this->render('cgu', $data);
    }

    public function empreinteCarbone(): string
    {
        $data = ['title'=> 'Empreinte Carbone',
        'head' => "<link href='" . BASE_URL_ASSETS . "css/qcm.css' rel='stylesheet' type='text/css'>"];
        return $this->render('empreintecarbone', $data);
    }

    public function qcm(): string
    {
        $data = ['title'=> 'QCM',
        'head' => "<link href='" . BASE_URL_ASSETS . "css/qcm.css' rel='stylesheet' type='text/css'>"];
        return $this->render('qcm', $data);
    }
}
