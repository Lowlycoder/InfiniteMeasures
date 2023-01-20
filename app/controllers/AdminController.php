<?php

namespace app\controllers;

use core\Controller;

/** Handle functionality for home page. */
class AdminController extends Controller
{
    public function admin(): string
    {
        $data = [
            'title' => 'AdminPanel',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/adminPanel.css' rel='stylesheet' type='text/css'>"
        ];

        return $this->render('adminPanel', $data);
    }

    public function captors(): string
    {
        $data = [
            'title' => 'captors',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/captor.css' rel='stylesheet' type='text/css'>"
        ];

        return $this->render('captors', $data);
    }

    public function tableUser(): string
    {
        $data = [
            'title' => 'tableUser',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/tableUser.css' rel='stylesheet' type='text/css'>"
        ];

        return $this->render('tableUser', $data);
    }

    public function statistics(): string
    {
        $data = [
            'title' => 'statistics',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/stats.css' rel='stylesheet' type='text/css'>"
        ];

        return $this->render('statistics', $data);
    }

    public function search(): string
    {
        $data = [
            'title' => 'Rechercher',
            'head' => "<link href='" . BASE_URL_ASSETS . "css/adminPanel.css' rel='stylesheet' type='text/css'>"
        ];

        return $this->render('Search-box', $data);
    }
}
