<?php

namespace app\controllers;

use core\Controller;

/** Handle functionality for home page. */
class AdminController extends Controller
{
    public function admin(): string
    {
        $data = ['title' => 'AdminPanel',
        'head' => "<link href='" . BASE_URL_ASSETS . "css/accordion.css' rel='stylesheet' type='text/css'>"];

        return $this->render('adminPanel', $data);
    }
}
