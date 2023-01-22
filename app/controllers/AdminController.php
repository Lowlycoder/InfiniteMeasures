<?php

namespace app\controllers;

use core\Controller;
use core\Model;

/** Handle functionality for home page. */
class AdminController extends Controller
{
    public function admin(): string
    {
        $model = new Model;
        $data = [
            'title' => 'Dashboard',
            'head' => '<link href="'.BASE_URL_ASSETS.'css/tableUser.css" rel="stylesheet" type="text/css">',
            'sidePanel' => $model->getViewHtml('adminSidePanel'),
        ];

        return $this->render('adminPanel', $data);
    }

    public function sensors(): string
    {
        $model = new Model;
        $data = [
            'title' => 'Les capteurs',
            'head' => '<link href="'.BASE_URL_ASSETS.'css/tableUser.css" rel="stylesheet" type="text/css">',
            'sidePanel' => $model->getViewHtml('adminSidePanel'),
        ];

        return $this->render('sensors', $data);
    }

    public function tableUser(): string
    {
        $model = new Model;
        $data = [
            'title' => 'Gestion des utilisateurs',
            'head' => '<link href="'.BASE_URL_ASSETS.'css/tableUser.css" rel="stylesheet" type="text/css">',
            'sidePanel' => $model->getViewHtml('adminSidePanel'),
        ];

        return $this->render('tableUser', $data);
    }

    public function editUser(): string
    {
        $model = new Model;
        $data = [
            'title' => 'Gestion des utilisateurs',
            'head' => '<link href="'.BASE_URL_ASSETS.'css/tableUser.css" rel="stylesheet" type="text/css">',
            'sidePanel' => $model->getViewHtml('adminSidePanel'),
        ];

        return $this->render('editUser', $data);
    }

    public function statistics(): string
    {
        $model = new Model;
        $data = [
            'title' => 'Statistics',
            'head' => '<link href="'.BASE_URL_ASSETS.'css/tableUser.css" rel="stylesheet" type="text/css">',
            'sidePanel' => $model->getViewHtml('adminSidePanel'),
        ];

        return $this->render('statistics', $data);
    }

    public function search(): string
    {
        $model = new Model;
        $data = [
            'title' => 'Rechercher',
            'head' => '<link href="'.BASE_URL_ASSETS.'css/tableUser.css" rel="stylesheet" type="text/css">',
            'sidePanel' => $model->getViewHtml('adminSidePanel'),
        ];

        return $this->render('search', $data);
    }
}
